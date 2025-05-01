<?php

namespace Lunar\Admin\Filament\Resources\RecommendationResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\RecommendationResource;

class EditRecommendation extends EditRecord
{
    protected static string $resource = RecommendationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
