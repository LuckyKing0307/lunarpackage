<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\CarouselItem;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CarouselItemResource extends Resource
{
    protected static ?string $model = CarouselItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getNavigationGroup(): ?string
    {
        return 'Дополнительно';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image_path')
                    ->directory('carousels') // Папка в storage/app/public/carousels
                    ->image()
                    ->required(),

                TextInput::make('title')
                    ->label('Подпись')
                    ->nullable(),

                TextInput::make('sort_order')
                    ->label('Порядок')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->label('Картинка')
                    ->disk('public')
                    ->visibility('public')
                    ->url(fn ($record) => asset('storage/carousels/' . $record->image_path)),

                TextColumn::make('title')->label('Подпись'),
                TextColumn::make('sort_order')->label('Порядок'),
            ])
            ->defaultSort('sort_order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Lunar\Admin\Filament\Resources\CarouselItemResource\Pages\ListCarouselItems::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\CarouselItemResource\Pages\CreateCarouselItem::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\CarouselItemResource\Pages\EditCarouselItem::route('/{record}/edit'),
        ];
    }
}
