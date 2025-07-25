<?php

namespace Lunar\Admin\Filament\Resources\MarketTalonResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\MarketTalonResource;

class EditMarketTalon extends EditRecord
{
    protected static string $resource = MarketTalonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
