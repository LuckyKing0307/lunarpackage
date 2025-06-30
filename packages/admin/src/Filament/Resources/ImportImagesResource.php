<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\ImportImages;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Lunar\Admin\Filament\Clusters\Taxes;

class ImportImagesResource extends Resource
{
    protected static ?string $model = ImportImages::class;

    protected static ?string $navigationIcon = 'heroicon-m-photo';

    protected static ?string $navigationGroup = 'Каталог';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('zip_path')
                    ->label('ZIP-архив')
                    ->disk('local')
                    ->directory('imports')
                    ->acceptedFileTypes([
                        'application/zip',
                        'application/x-zip-compressed',
                        'multipart/x-zip',
                        'application/octet-stream',
                        '.zip',
                    ])
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->label('ID'),
                Tables\Columns\TextColumn::make('zip_path')->label('Файл'),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'secondary' => 'queued',
                        'warning'   => 'processing',
                        'success'   => 'done',
                        'danger'    => 'failed',
                    ]),
                Tables\Columns\TextColumn::make('processed')->label('Фото'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Загружен')
                    ->dateTime('d.m.Y H:i'),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => \Lunar\Admin\Filament\Resources\ImportImagesResource\Pages\ListImportImages::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\ImportImagesResource\Pages\CreateImportImages::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\ImportImagesResource\Pages\EditImportImages::route('/{record}/edit'),
        ];
    }
}
