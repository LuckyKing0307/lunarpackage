<?php

namespace Lunar\Admin\Filament\Resources\ExcelImportResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Lunar\Admin\Filament\Resources\ExcelImportResource;

class ListExcelImports extends ListRecords
{
    protected static string $resource = ExcelImportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
