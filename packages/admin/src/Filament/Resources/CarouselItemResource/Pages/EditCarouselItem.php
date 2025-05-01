<?php

namespace Lunar\Admin\Filament\Resources\CarouselItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\CarouselItemResource;

class EditCarouselItem extends EditRecord
{
    protected static string $resource = CarouselItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
