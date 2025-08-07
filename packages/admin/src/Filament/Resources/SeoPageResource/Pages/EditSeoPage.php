<?php

namespace Lunar\Admin\Filament\Resources\SeoPageResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Lunar\Admin\Filament\Resources\SeoPageResource;

class EditSeoPage extends EditRecord
{
    protected static string $resource = SeoPageResource::class;
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['content_blocks']        = json_decode($data['content_blocks'],1);

        return $data;
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
