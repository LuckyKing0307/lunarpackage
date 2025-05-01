<?php

namespace Lunar\Admin\Filament\Resources\PopularResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\PopularResource;

class EditPopular extends EditRecord
{
    protected static string $resource = PopularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
