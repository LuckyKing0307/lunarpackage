<?php

namespace Lunar\Admin\Filament\Resources\SeoPageResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Lunar\Admin\Filament\Resources\ExcelImportResource;
use Lunar\Admin\Filament\Resources\SeoPageResource;

class CreateSeoPage extends CreateRecord
{
    protected static string $resource = SeoPageResource::class;


    /** 2) Здесь уже точно срабатывает */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // FileUpload сразу вернёт строку пути, а не UploadedFile
        $data['content_blocks']        = json_encode($data['content_blocks']);
        return $data;
    }
}
