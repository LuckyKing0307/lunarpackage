<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\Popular;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
class PopularResource extends Resource
{
    protected static ?string $model = Popular::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getNavigationGroup(): ?string
    {
        return 'Дополнительно';
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('image') // Здесь можно указывать коллекцию 'image'
                    ->label('Фото')
                    ->conversion('thumb') // (если у тебя есть конверсии)
                    ->limit(1)
                    ->circular(), // размер превью фото

                TextColumn::make('title')
                    ->label('Название')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => \Lunar\Admin\Filament\Resources\PopularResource\Pages\ListPopulars::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\PopularResource\Pages\CreatePopular::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\PopularResource\Pages\EditPopular::route('/{record}/edit'),
        ];
    }
}
