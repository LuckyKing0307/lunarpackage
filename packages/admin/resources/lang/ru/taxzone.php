<?php

return [

    'label'        => 'Налоговая зона',
    'plural_label' => 'Налоговые зоны',

    'table' => [
        'name'      => [
            'label' => 'Название',
        ],
        'zone_type' => [
            'label' => 'Тип зоны',
        ],
        'active'    => [
            'label' => 'Активна',
        ],
        'default'   => [
            'label' => 'По умолчанию',
        ],
    ],

    'form' => [
        'name'           => [
            'label' => 'Название',
        ],
        'zone_type'      => [
            'label'   => 'Тип зоны',
            'options' => [
                'country'   => 'Ограничить по странам',
                'states'    => 'Ограничить по штатам',
                'postcodes' => 'Ограничить по почтовым индексам',
            ],
        ],
        'price_display'  => [
            'label'   => 'Отображение цены',
            'options' => [
                'include_tax' => 'Включая налог',
                'exclude_tax' => 'Исключая налог',
            ],
        ],
        'active'         => [
            'label' => 'Активна',
        ],
        'default'        => [
            'label' => 'По умолчанию',
        ],

        'zone_countries' => [
            'label' => 'Страны',
        ],

        'zone_country'   => [
            'label' => 'Страна',
        ],

        'zone_states'    => [
            'label' => 'Штаты',
        ],

        'zone_postcodes' => [
            'label'  => 'Почтовые индексы',
            'helper' => 'Указывайте каждый индекс с новой строки. Поддерживаются подстановочные символы, например NW*',
        ],

    ],

];
