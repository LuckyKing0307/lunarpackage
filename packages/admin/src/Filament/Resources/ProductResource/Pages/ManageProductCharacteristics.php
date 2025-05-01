<?php

namespace Lunar\Admin\Filament\Resources\ProductResource\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Support\Facades\FilamentIcon;
use Filament\Tables;
use Filament\Tables\Table;
use Lunar\Admin\Filament\Resources\ProductResource;
use Lunar\Admin\Support\Pages\BaseManageRelatedRecords;

class ManageProductCharacteristics extends BaseManageRelatedRecords
{
    protected static string $resource = ProductResource::class;

    /**
     * Название отношения в модели Product:
     * public function characteristics(): HasMany { … }
     */
    protected static string $relationship = 'characteristics';

    public static function getNavigationIcon(): ?string
    {
        return FilamentIcon::resolve('heroicon-o-adjustments');
    }

    public function getTitle(): string
    {
        return __('Characteristics');
    }

    public static function getNavigationLabel(): string
    {
        return __('Characteristics');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->label(__('Key'))
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('value')
                    ->label(__('Value'))
                    ->nullable(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('key')
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label(__('Key')),

                Tables\Columns\TextColumn::make('value')
                    ->label(__('Value')),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
