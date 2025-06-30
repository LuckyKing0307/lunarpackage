<?php

namespace Lunar\Admin\Filament\Resources\ImportImagesResource\Pages;

use App\Jobs\ImportImagesJob;
use Filament\Resources\Pages\CreateRecord;
use Lunar\Admin\Filament\Resources\ImportImagesResource;

class CreateImportImages extends CreateRecord
{
    protected static string $resource = ImportImagesResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;
        ImportImagesJob::dispatch($record->zip_path, $record);
    }
}
