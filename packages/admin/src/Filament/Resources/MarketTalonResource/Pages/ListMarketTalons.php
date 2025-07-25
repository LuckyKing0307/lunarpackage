<?php

namespace Lunar\Admin\Filament\Resources\MarketTalonResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Lunar\Admin\Filament\Resources\MarketTalonResource;

class ListMarketTalons extends ListRecords
{
    protected static string $resource = MarketTalonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
