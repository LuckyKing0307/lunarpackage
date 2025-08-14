<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\Project;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;


    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Наши проекты';
    protected static ?string $pluralLabel = 'Наши проекты';
    protected static ?string $modelLabel = 'Проект';
    protected static ?string $navigationGroup = 'Контент';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Основное')
                ->columns(2)
                ->schema([
                    TextInput::make('title')
                        ->label('Название')
                        ->required(),
                    Toggle::make('is_active')
                        ->label('Активен')
                        ->default(true),
                ]),

            Section::make('Медиа')
                ->schema([
                    FileUpload::make('images')
                        ->label('Фотографии')
                        ->image()
                        ->multiple()
                        ->reorderable()
                        ->appendFiles()
                        ->directory('projects')
                        ->imageEditor()
                        ->maxSize(4096)
                        ->panelLayout('grid')
                        ->columnSpanFull(),
                ]),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('images.0')
                    ->label('Превью')
                    ->size(60)
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Название')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Активен')
                    ->boolean()
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
            'index' => \Lunar\Admin\Filament\Resources\ProjectResource\Pages\ListProjects::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\ProjectResource\Pages\CreateProject::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\ProjectResource\Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
