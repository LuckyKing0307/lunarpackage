<?php

namespace Lunar\Admin\Filament\Pages;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use App\Jobs\ImportProductsFromExcel;
class ImportProducts extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'lunar.admin.filament.clusters.taxes.pages.import-products';

    public ?array $data = [];

    /** Конфигурируем форму */
    public function form(Form $form): Form
    {
        return $form
            ->statePath('data')      // где хранить значения полей
            ->schema([
                FileUpload::make('file')
                    ->label('Excel-файл (.xlsx)')
                    ->acceptedFileTypes([
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    ])
                    ->required(),
            ]);
    }

    /** Обработка отправки */
    public function submit(): void
    {
        $path = $this->form->getState()['file']->store('imports');

        ImportProductsFromExcel::dispatch($path);

        $this->notify('success', 'Файл загружен и поставлен в очередь');
        $this->form->fill(); // очищаем после отправки
    }
}
