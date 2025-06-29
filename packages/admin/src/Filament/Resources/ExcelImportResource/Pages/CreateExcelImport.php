<?php

namespace Lunar\Admin\Filament\Resources\ExcelImportResource\Pages;

use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use Lunar\Admin\Filament\Resources\ExcelImportResource;
use Illuminate\Support\Str;
use App\Jobs\ImportProductsFromExcel;
class CreateExcelImport extends CreateRecord
{
    protected static string $resource = ExcelImportResource::class;


    /** 2) Здесь уже точно срабатывает */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // FileUpload сразу вернёт строку пути, а не UploadedFile
        $data['path']        = $data['file'];
        $data['original_name'] = Str::afterLast($data['file'], '/'); // сохраняем имя
        $data['status']        = 'queued';

        return $data;
    }

    /** 3) Запускаем очередь после записи */
    protected function afterCreate(): void
    {
        ImportProductsFromExcel::dispatch($this->record);
    }
}
