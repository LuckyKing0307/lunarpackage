<?php

return [

    'label' => 'Бренд',

    'plural_label' => 'Бренды',

    'table' => [
        'name' => [
            'label' => 'Название',
        ],
        'products_count' => [
            'label' => 'Кол-во товаров',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Название',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Этот бренд нельзя удалить, так как к нему привязаны товары.',
            ],
        ],
    ],

    'pages' => [
        'products' => [
            'label' => 'Товары',
            'actions' => [
                'attach' => [
                    'label' => 'Связать товар',
                    'form' => [
                        'record_id' => [
                            'label' => 'Товар',
                        ],
                    ],
                    'notification' => [
                        'success' => 'Товар привязан к бренду.',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'Товар отвязан.',
                    ],
                ],
            ],
        ],
        'collections' => [
            'label' => 'Коллекции',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'Выберите коллекцию',
                        ],
                    ],
                ],
            ],
            'actions' => [
                'attach' => [
                    'label' => 'Связать коллекцию',
                ],
            ],
        ],
    ],

];
