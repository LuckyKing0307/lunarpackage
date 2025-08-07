<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\SeoPage;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Lunar\Admin\Filament\Clusters\Taxes;
class SeoPageResource extends Resource
{
    protected static ?string $model = SeoPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Блог';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->disabledOn('edit'),
                TextInput::make('category')
                    ->required(),
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required(),
                Textarea::make('meta_description')
                    ->label('Мета-описание'),

                FileUpload::make('og_image')
                    ->label('OG-картинка')
                    ->directory('seo/og')
                    ->image()
                    ->imagePreviewHeight('100'),

                RichEditor::make('content')
                    ->label('Контент')
                    ->disableToolbarButtons(['codeBlock']),
                Repeater::make('content_blocks')
                    ->label('Блоки контента')
                    ->schema([
                        TextInput::make('title')
                            ->label('Заголовок'),

                        RichEditor::make('text')
                            ->label('Текст')
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->label('Изображение')
                            ->directory('seo/blocks')
                            ->image(),

                        Select::make('image_position')
                            ->label('Позиция изображения')
                            ->options([
                                'left' => 'Слева',
                                'right' => 'Справа',
                            ])
                            ->default('right'),
                    ])
                    ->reorderable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
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
            'index' => \Lunar\Admin\Filament\Resources\SeoPageResource\Pages\ListSeoPages::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\SeoPageResource\Pages\CreateSeoPage::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\SeoPageResource\Pages\EditSeoPage::route('/{record}/edit'),
        ];
    }
}
