<?php

namespace Lunar\Admin\Filament\Resources\ProjectResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Lunar\Admin\Filament\Resources\ProjectResource;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
