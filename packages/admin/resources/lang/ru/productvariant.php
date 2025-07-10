<?php

return [
    'label'        => 'Вариант товара',
    'plural_label' => 'Варианты товара',

    'pages' => [
        'edit' => [
            'title' => 'Основная информация',
        ],
        'media' => [
            'title' => 'Медиа',
            'form'  => [
                'no_selection'        => [
                    'label' => 'Для этого варианта не выбрано изображение.',
                ],
                'no_media_available'  => [
                    'label' => 'Медиа для этого товара отсутствует.',
                ],
                'images'              => [
                    'label'       => 'Основное изображение',
                    'helper_text' => 'Выберите изображение, представляющее этот вариант.',
                ],
            ],
        ],
        'identifiers' => [
            'title' => 'Идентификаторы',
        ],
        'inventory' => [
            'title' => 'Запасы',
        ],
        'shipping' => [
            'title' => 'Доставка',
        ],
    ],

    'form' => [
        'sku'                => [
            'label' => 'SKU',
        ],
        'gtin'               => [
            'label' => 'Глобальный торговый номер (GTIN)',
        ],
        'mpn'                => [
            'label' => 'Номер детали производителя (MPN)',
        ],
        'ean'                => [
            'label' => 'UPC/EAN',
        ],
        'stock'              => [
            'label' => 'В наличии',
        ],
        'backorder'          => [
            'label' => 'Под заказ',
        ],
        'purchasable'        => [
            'label'   => 'Доступность к покупке',
            'options' => [
                'always'                         => 'Всегда',
                'in_stock'                       => 'В наличии',
                'in_stock_or_on_backorder'      => 'В наличии или под заказ',
            ],
        ],
        'unit_quantity'      => [
            'label'       => 'Количество в единице',
            'helper_text' => 'Сколько отдельных предметов составляет 1 единицу.',
        ],
        'min_quantity'       => [
            'label'       => 'Минимальное количество',
            'helper_text' => 'Минимальное количество варианта, которое можно купить за один раз.',
        ],
        'quantity_increment' => [
            'label'       => 'Шаг количества',
            'helper_text' => 'Купить можно только кратное этому числу.',
        ],
        'tax_class_id'       => [
            'label' => 'Налоговый класс',
        ],
        'shippable'          => [
            'label' => 'Подлежит доставке',
        ],
        'length_value'       => [
            'label' => 'Длина',
        ],
        'length_unit'        => [
            'label' => 'Единица длины',
        ],
        'width_value'        => [
            'label' => 'Ширина',
        ],
        'width_unit'         => [
            'label' => 'Единица ширины',
        ],
        'height_value'       => [
            'label' => 'Высота',
        ],
        'height_unit'        => [
            'label' => 'Единица высоты',
        ],
        'weight_value'       => [
            'label' => 'Вес',
        ],
        'weight_unit'        => [
            'label' => 'Единица веса',
        ],
    ],
];
