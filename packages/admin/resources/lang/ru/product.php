<?php

return [

    'label'        => 'Товар',
    'plural_label' => 'Товары',

    'status' => [
        'unpublished'  => [
            'content' => 'В данный момент находится в черновике, этот товар скрыт во всех каналах и для всех групп клиентов.',
        ],
        'availability' => [
            'customer_groups' => 'Этот товар в данный момент недоступен для всех групп клиентов.',
            'channels'        => 'Этот товар в данный момент недоступен во всех каналах.',
        ],
    ],

    'table' => [
        'status'      => [
            'label'  => 'Статус',
            'states' => [
                'deleted'   => 'Удалён',
                'draft'     => 'Черновик',
                'published' => 'Опубликован',
            ],
        ],
        'name'        => [
            'label' => 'Название',
        ],
        'brand'       => [
            'label' => 'Бренд',
        ],
        'sku'         => [
            'label' => 'SKU',
        ],
        'stock'       => [
            'label' => 'Остаток',
        ],
        'producttype' => [
            'label' => 'Тип товара',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label'   => 'Обновить статус',
            'heading' => 'Обновление статуса',
        ],
    ],

    'form' => [
        'name'        => [
            'label' => 'Название',
        ],
        'brand'       => [
            'label' => 'Бренд',
        ],
        'sku'         => [
            'label' => 'SKU',
        ],
        'producttype' => [
            'label' => 'Тип товара',
        ],
        'status'      => [
            'label'   => 'Статус',
            'options' => [
                'published' => [
                    'label'       => 'Опубликован',
                    'description' => 'Этот товар будет доступен во всех включённых группах клиентов и каналах',
                ],
                'draft'     => [
                    'label'       => 'Черновик',
                    'description' => 'Этот товар будет скрыт во всех каналах и группах клиентов',
                ],
            ],
        ],
        'tags'        => [
            'label'       => 'Теги',
            'helper_text' => 'Разделяйте теги нажатием Enter, Tab или запятой (",")',
        ],
        'collections' => [
            'label' => 'Коллекции',
        ],
    ],

    'pages' => [
        'availability'  => [
            'label' => 'Доступность',
        ],
        'edit'          => [
            'title' => 'Основная информация',
        ],
        'identifiers'   => [
            'label' => 'Идентификаторы товара',
        ],
        'inventory'     => [
            'label' => 'Запасы',
        ],
        'pricing'       => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'Налоговый класс',
                ],
                'tax_ref'      => [
                    'label'       => 'Налоговый реф.',
                    'helper_text' => 'Необязательно, для интеграции с внешними системами.',
                ],
            ],
        ],
        'shipping'      => [
            'label' => 'Доставка',
        ],
        'variants'      => [
            'label' => 'Варианты',
        ],
        'collections'   => [
            'label' => 'Коллекции',
        ],
        'associations'  => [
            'label' => 'Ассоциации товара',
        ],
    ],

];
