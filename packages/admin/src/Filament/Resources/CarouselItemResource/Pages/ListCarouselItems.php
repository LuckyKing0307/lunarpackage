<?php

namespace Lunar\Admin\Filament\Resources\CarouselItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Lunar\Admin\Filament\Resources\CarouselItemResource;

class ListCarouselItems extends ListRecords
{
    protected static string $resource = CarouselItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
