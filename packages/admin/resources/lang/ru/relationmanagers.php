<?php

return [

    'customer_groups' => [
        'actions' => [
            'attach' => [
                'label' => 'Прикрепить группу клиентов',
            ],
        ],
        'form' => [
            'name'       => ['label' => 'Название'],
            'enabled'    => ['label' => 'Включено'],
            'starts_at'  => ['label' => 'Дата начала'],
            'ends_at'    => ['label' => 'Дата окончания'],
            'visible'    => ['label' => 'Видимость'],
            'purchasable'=> ['label' => 'Доступно к покупке'],
        ],
        'table' => [
            'description' => 'Свяжите группы клиентов с этим :type, чтобы определить его доступность.',
            'name'        => ['label' => 'Название'],
            'enabled'     => ['label' => 'Включено'],
            'starts_at'   => ['label' => 'Дата начала'],
            'ends_at'     => ['label' => 'Дата окончания'],
            'visible'     => ['label' => 'Видимость'],
            'purchasable' => ['label' => 'Доступно к покупке'],
        ],
    ],

    'channels' => [
        'actions' => [
            'attach' => [
                'label' => 'Запланировать другой канал',
            ],
        ],
        'form' => [
            'enabled'   => [
                'label'             => 'Включено',
                'helper_text_false' => 'Этот канал не будет включён, даже если указана дата начала.',
            ],
            'starts_at' => [
                'label'       => 'Дата начала',
                'helper_text' => 'Оставьте пустым для доступности с любой даты.',
            ],
            'ends_at'   => [
                'label'       => 'Дата окончания',
                'helper_text' => 'Оставьте пустым для доступности без ограничений.',
            ],
        ],
        'table' => [
            'description' => 'Определите, какие каналы включены, и запланируйте их доступность.',
            'name'        => ['label' => 'Название'],
            'enabled'     => ['label' => 'Включено'],
            'starts_at'   => ['label' => 'Дата начала'],
            'ends_at'     => ['label' => 'Дата окончания'],
        ],
    ],

    'medias' => [
        'title'         => 'Медиа',
        'title_plural'  => 'Медиа',
        'actions'       => [
            'attach' => ['label' => 'Прикрепить медиа'],
            'create' => ['label' => 'Создать медиа'],
            'detach' => ['label' => 'Открепить'],
            'view'   => ['label' => 'Просмотр'],
        ],
        'form' => [
            'name'    => ['label' => 'Название'],
            'media'   => ['label' => 'Изображение'],
            'primary' => ['label' => 'Основное'],
        ],
        'table' => [
            'image'   => ['label' => 'Изображение'],
            'file'    => ['label' => 'Файл'],
            'name'    => ['label' => 'Название'],
            'primary' => ['label' => 'Основное'],
        ],
        'all_media_attached'   => 'Нет доступных изображений товара для прикрепления',
        'variant_description'  => 'Прикрепите изображения товара к этому варианту',
    ],

    'urls' => [
        'title'         => 'URL',
        'title_plural'  => 'URL',
        'actions'       => [
            'create' => ['label' => 'Создать URL'],
        ],
        'filters' => [
            'language_id' => ['label' => 'Язык'],
        ],
        'form' => [
            'slug'    => ['label' => 'Slug'],
            'default' => ['label' => 'По умолчанию'],
            'language'=> ['label' => 'Язык'],
        ],
        'table' => [
            'slug'     => ['label' => 'Slug'],
            'default'  => ['label' => 'По умолчанию'],
            'language' => ['label' => 'Язык'],
        ],
    ],

    'customer_group_pricing' => [
        'title'        => 'Цены для групп клиентов',
        'title_plural' => 'Цены для групп клиентов',
        'table' => [
            'heading'     => 'Цены для групп клиентов',
            'description' => 'Установите цены для групп клиентов, чтобы определить цену товара.',
            'empty_state' => [
                'label'       => 'Цены для групп клиентов отсутствуют.',
                'description' => 'Создайте цену для группы клиентов, чтобы начать.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Добавить цену для группы клиентов',
                    'modal' => [
                        'heading' => 'Создать цену для группы клиентов',
                    ],
                ],
            ],
        ],
    ],

    'pricing' => [
        'title'        => 'Цены',
        'title_plural' => 'Цены',
        'tab_name'     => 'Скидки за количество',
        'table' => [
            'heading'        => 'Скидки за количество',
            'description'    => 'Уменьшайте цену при покупке больших объёмов.',
            'empty_state'    => [
                'label' => 'Скидки за количество отсутствуют.',
            ],
            'actions' => [
                'create' => ['label' => 'Добавить скидку за количество'],
            ],
            'price'           => ['label' => 'Цена'],
            'customer_group'  => [
                'label'       => 'Группа клиентов',
                'placeholder' => 'Все группы клиентов',
            ],
            'min_quantity'    => ['label' => 'Минимальное количество'],
            'currency'        => ['label' => 'Валюта'],
        ],
        'form' => [
            'price' => [
                'label'       => 'Цена',
                'helper_text' => 'Цена покупки до применения скидок.',
            ],
            'customer_group_id' => [
                'label'       => 'Группа клиентов',
                'placeholder' => 'Все группы клиентов',
                'helper_text' => 'Выберите группу клиентов для применения этой цены.',
                'validation'  => [
                    'unique' => 'Комбинация группы клиентов и минимального количества должна быть уникальной.',
                ],
            ],
            'min_quantity' => [
                'label'       => 'Минимальное количество',
                'helper_text' => 'Выберите минимальное количество, при котором будет доступна эта цена.',
            ],
            'currency_id' => [
                'label'       => 'Валюта',
                'helper_text' => 'Выберите валюту для этой цены.',
            ],
            'compare_price' => [
                'label'       => 'Сравнительная цена',
                'helper_text' => 'Обычная цена или РРЦ для сравнения с ценой покупки.',
            ],
            'basePrices' => [
                'title'   => 'Цены',
                'form'    => [
                    'price' => [
                        'label'       => 'Цена',
                        'helper_text' => 'Цена покупки до применения скидок.',
                    ],
                    'compare_price' => [
                        'label'       => 'Сравнительная цена',
                        'helper_text' => 'Обычная цена или РРЦ для сравнения с ценой покупки.',
                    ],
                ],
                'tooltip' => 'Автоматически генерируется на основе курсов валют.',
            ],
        ],
    ],

    'tax_rate_amounts' => [
        'table' => [
            'description' => '',
            'percentage'  => [
                'label' => 'Процент',
            ],
            'tax_class'   => [
                'label' => 'Налоговый класс',
            ],
        ],
    ],

];
