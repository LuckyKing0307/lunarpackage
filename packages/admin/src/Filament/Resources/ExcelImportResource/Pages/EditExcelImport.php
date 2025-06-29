<?php

namespace Lunar\Admin\Filament\Resources\ExcelImportResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\ExcelImportResource;

class EditExcelImport extends EditRecord
{
    protected static string $resource = ExcelImportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
