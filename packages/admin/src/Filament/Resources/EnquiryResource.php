<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\Enquiry;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Сообщения';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->disabled(),
                TextInput::make('phone')->tel()->disabled(),
                TextInput::make('email')->email()->disabled(),
                Textarea::make('message')->disabled(),
                DateTimePicker::make('created_at')->label('Получена')->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('id')->sortable(),
                TextColumn::make('name')->label('Имя')->searchable(),
                TextColumn::make('phone')->label('Номер'),
                TextColumn::make('email')->label('Почта'),
                TextColumn::make('created_at')->label('Получена')->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Lunar\Admin\Filament\Resources\EnquiryResource\Pages\ListEnquiries::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\EnquiryResource\Pages\CreateEnquiry::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\EnquiryResource\Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }
}
