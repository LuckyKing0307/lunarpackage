<?php

namespace Lunar\Admin\Filament\Resources;

use App\Models\MarketTalon;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MarketTalonResource extends Resource
{
    protected static ?string $model = MarketTalon::class;
    protected static ?string $navigationGroup = 'Гарантия';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('product_name')->label('Названия Продукта')->required(),
                TextInput::make('phone_number')->numeric()->label('Номер телефона')->required(),
                TextInput::make('order_id')->numeric()->label('Номер Заказа')->required(),
                TextInput::make('customer_name')->label('ФОИ')->required(),
                Select::make('warranty_period')->label('Срок гарантии')->required()
                    ->options([
                        '12' => '12 месяцев',
                        '24' => '24 месяца',
                        '36' => '36 месяцев',
                    ])
                    ->default('12')
                    ->required(),
                Textarea::make('some_letter')->label('Примечание'),
                CheckboxList::make('warranty_types')
                    ->label('Типы гарантии')
                    ->options([
                        'cleaning' => 'Yuvilishga chidamliligi – 15 yil',
                        'watering' => 'Namlikka chidamliligi – 5 yil',
                        'balooning' => 'Ishib ketmasligiga – 5 yil',
                        'lifting' => 'Ko‘tarilib ketmasligiga – 5 yil',
                        'weather' => 'Ichida havo to‘lib, qopqoqdek o‘ynamasligiga – 5 yil',
                        'dancing' => 'Siljib ketmasligiga – 5 yil',
                        'case' => 'Qulf (zamok) ochilib ketmasligiga – 5 yil',
                        'case_water' => 'Qulflari 24 soatgacha suvga chidamli',
                    ])
                    ->columns(2) // Количество колонок
                    ->required(),
                DatePicker::make('bought_date')->required()
                    ->label('Дата покупки')
                    ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_name')
                    ->label('Товар')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('order_id')
                    ->label('№ Заказа')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('customer_name')
                    ->label('Клиент')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone_number')
                    ->label('Телефон'),

                TextColumn::make('warranty_period')
                    ->label('Гарантия'),

                TextColumn::make('warranty_types')
                    ->label('Типы гарантии')
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state),

                TextColumn::make('some_letter')
                    ->label('Примечание')
                    ->limit(30),

                TextColumn::make('bought_date')
                    ->label('Дата покупки')
                    ->date(),
            ])
            ->filters([
                // можно добавить фильтры по дате, гарантии, типу
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('print')
                    ->label('Печать')
                    ->icon('heroicon-m-printer')
                    ->url(fn ($record) => route('warranty.print', $record))
                    ->openUrlInNewTab()
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
            'index' => \Lunar\Admin\Filament\Resources\MarketTalonResource\Pages\ListMarketTalons::route('/'),
            'create' => \Lunar\Admin\Filament\Resources\MarketTalonResource\Pages\CreateMarketTalon::route('/create'),
            'edit' => \Lunar\Admin\Filament\Resources\MarketTalonResource\Pages\EditMarketTalon::route('/{record}/edit'),
        ];
    }
}
