<?php

namespace Lunar\Admin\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CarouselItem;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Lunar\Admin\Filament\Resources\CarouselItemResource;

class MyPage extends Page implements HasTable
{
    use InteractsWithTable;
    public $image_path = null;
    protected static string $view = 'lunarpanel::castompages.castom.castom';

    public static function getSlug(): string
    {
        return 'my-custom-page';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Дополнительно';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-document-text';
    }

    public static function getNavigationLabel(): string
    {
        return 'Моя кастомная страница';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(CarouselItem::query()) // <-- ЭТО важно!
            ->columns([
                ImageColumn::make('image_path')
                    ->disk('public')
                    ->label('Изображение'),
                TextColumn::make('title')->label('Название'),
                TextColumn::make('sort_order')->label('Порядок'),
            ])
            ->defaultSort('sort_order');
    }
    public function getMountedActionFormModalTitle(): string
    {
        return 'Карусель: Управление слайдами';
    }
}
