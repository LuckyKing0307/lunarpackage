<?php

namespace Lunar\Admin\Filament\Resources\PopularResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Lunar\Admin\Filament\Resources\PopularResource;

class ListPopulars extends ListRecords
{
    protected static string $resource = PopularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
