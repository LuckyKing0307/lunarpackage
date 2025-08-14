<?php

namespace Lunar\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Cache;
use Kalnoy\Nestedset\NodeTrait;
use Kalnoy\Nestedset\QueryBuilder;
use Lunar\Base\BaseModel;
use Lunar\Base\Casts\AsAttributeData;
use Lunar\Base\Traits\HasChannels;
use Lunar\Base\Traits\HasCustomerGroups;
use Lunar\Base\Traits\HasMacros;
use Lunar\Base\Traits\HasMedia;
use Lunar\Base\Traits\HasTranslations;
use Lunar\Base\Traits\HasUrls;
use Lunar\Base\Traits\Searchable;
use Lunar\Database\Factories\CollectionFactory;
use Lunar\Facades\DB;
use Spatie\MediaLibrary\HasMedia as SpatieHasMedia;

/**
 * @property int $id
 * @property int $collection_group_id
 * @property-read  int $_lft
 * @property-read  int $_rgt
 * @property ?int $parent_id
 * @property string $type
 * @property ?array $attribute_data
 * @property string $sort
 * @property ?\Illuminate\Support\Carbon $created_at
 * @property ?\Illuminate\Support\Carbon $updated_at
 * @property ?\Illuminate\Support\Carbon $deleted_at
 */
class Collection extends BaseModel implements Contracts\Collection, SpatieHasMedia
{
    use HasChannels,
        HasCustomerGroups,
        HasFactory,
        HasMacros,
        HasMedia,
        HasTranslations,
        HasUrls,
        NodeTrait,
        Searchable {
            NodeTrait::usesSoftDelete insteadof Searchable;
        }

    /**
     * Define which attributes should be cast.
     *
     * @var array
     */
    protected $casts = [
        'attribute_data' => AsAttributeData::class,
    ];

    protected $guarded = [];

    /**
     * Return a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return CollectionFactory::new();
    }

    public function getScopeAttributes()
    {
        return ['collection_group_id'];
    }

    public function getBrands()
    {

        $cacheKey = 'brands_img1_'.$this->id;
        return Cache::remember($cacheKey, now()->addDay(), function () {
            $collectionIds = $this->children()->pluck('id')->all();
            $brandCollectionMap = DB::table('lunar_products as p')
                ->join('lunar_collection_product as cp', 'cp.product_id', '=', 'p.id')
                ->whereIn('cp.collection_id', $collectionIds)
                ->whereNotNull('p.brand_id')
                ->select('p.brand_id', 'cp.collection_id')
                ->get()
                ->groupBy('brand_id');

            $brands = Brand::whereIn('id', $brandCollectionMap->keys())->get()->keyBy('id');
            $allCollectionIds = $brandCollectionMap->flatten(1)->pluck('collection_id')->unique()->values();
            $collections = Collection::whereIn('id', $allCollectionIds)->get()->keyBy('id');
            return $brandCollectionMap->map(function ($items, $brandId) use ($brands, $collections) {
                $collectionModels = $items->pluck('collection_id')
                    ->unique()
                    ->map(fn($id) => $collections[$id])
                    ->filter();
                $brands[$brandId]['img'] = $brands[$brandId]->getFirstMediaUrl('images');
                return [
                    'brand' => $brands[$brandId],
                    'collections' => $collectionModels->values(),
                    'img' => $brands[$brandId]->getFirstMediaUrl('images'),
                ];
            })->values();
        });
    }

    public function getGroupId()
    {
        return $this->collection_group_id;
    }

    /**
     * Return the group relationship.
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(CollectionGroup::modelClass(), 'collection_group_id');
    }

    public function scopeInGroup(Builder $builder, int $id): Builder
    {
        return $builder->where('collection_group_id', $id);
    }

    /**
     * Return the products relationship.
     */
    public function products(): BelongsToMany
    {
        $prefix = config('lunar.database.table_prefix');

        return $this->belongsToMany(
            Product::modelClass(),
            "{$prefix}collection_product"
        )->withPivot([
            'position',
        ])->withTimestamps()->orderByPivot('position');
    }

    /**
     *
     * Get the translated name of ancestor collections.
     */
    public function getBreadcrumbAttribute(): \Illuminate\Support\Collection
    {
        return $this->ancestors->map(function ($ancestor) {
            return $ancestor->translateAttribute('name');
        });
    }

    public function customerGroups(): BelongsToMany
    {
        $prefix = config('lunar.database.table_prefix');

        return $this->belongsToMany(
            CustomerGroup::modelClass(),
            "{$prefix}collection_customer_group"
        )->withPivot([
            'visible',
            'enabled',
            'starts_at',
            'ends_at',
        ])->withTimestamps();
    }

    public function discounts(): BelongsToMany
    {
        $prefix = config('lunar.database.table_prefix');

        return $this->belongsToMany(
            Discount::modelClass(),
            "{$prefix}collection_discount"
        )->withPivot(['type'])->withTimestamps();
    }

    public function brands(): BelongsToMany
    {
        $prefix = config('lunar.database.table_prefix');

        return $this->belongsToMany(
            Brand::modelClass(),
            "{$prefix}brand_collection"
        )->withTimestamps();
    }

    public function newEloquentBuilder($query): QueryBuilder
    {
        return new QueryBuilder($query);
    }
}
