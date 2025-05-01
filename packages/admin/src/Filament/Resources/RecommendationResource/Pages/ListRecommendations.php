<?php

namespace Lunar\Admin\Filament\Resources\RecommendationResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Lunar\Admin\Filament\Resources\RecommendationResource;

class ListRecommendations extends ListRecords
{
    protected static string $resource = RecommendationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
