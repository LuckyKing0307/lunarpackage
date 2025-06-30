<?php

namespace Lunar\Admin\Filament\Resources\ImportImagesResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\ImportImagesResource;

class EditImportImages extends EditRecord
{
    protected static string $resource = ImportImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
