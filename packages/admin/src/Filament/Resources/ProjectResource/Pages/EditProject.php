<?php

namespace Lunar\Admin\Filament\Resources\ProjectResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\ProjectResource;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
