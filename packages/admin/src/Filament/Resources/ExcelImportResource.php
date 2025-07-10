<?php

namespace Lunar\Admin\Filament\Resources;

use App\Jobs\ImportProductsFromExcel;
use App\Models\ExcelImport;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ExcelImportResource extends Resource
{
    protected static ?string $model = ExcelImport::class;
    protected static ?string $navigationLabel = 'Import Excel';
    protected static ?string $navigationGroup = 'Import';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-tray';

    public static function form(Form $form): Form
    {
        return $form
            ->statePath('data')
            ->schema([
                FileUpload::make('file')
                    ->label('Excel (.xlsx)')
                    ->directory('imports')
                    ->acceptedFileTypes([
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    ])
                    ->required(),
            ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $file        = $data['file'];
        $path        = $file->store('imports');

        return [
            'original_name' => $file->getClientOriginalName(),
            'path'          => $path,
            'status'        => 'queued',
        ];
    }

    public static function afterCreate(Model $record): void
    {
        ImportProductsFromExcel::dispatch($record);   // ← очередь
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('original_name')->label('Файл')->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'queued'      => 'gray',
                        'processing'  => 'warning',
                        'completed'   => 'success',
                        'failed'      => 'danger',
                    ]),
                TextColumn::make('rows_processed')->label('Строк'),
                TextColumn::make('created_at')->label('Загружен')->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('download')
                    ->icon('heroicon-m-arrow-down-on-square-stack')
                    ->url(fn (ExcelImport $r) => Storage::url($r->path))
                    ->openUrlInNewTab(),
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
            'index' => \Lunar\Admin\Filament\Resources\ExcelImportResource\Pages\ListExcelImports::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\ExcelImportResource\Pages\CreateExcelImport::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\ExcelImportResource\Pages\EditExcelImport::route('/{record}/edit'),
        ];
    }
}
