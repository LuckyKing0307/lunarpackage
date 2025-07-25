<?php

return [

    'label' => 'Коллекция',

    'plural_label' => 'Коллекции',

    'form' => [
        'name' => [
            'label' => 'Название',
        ],
    ],

    'pages' => [
        'children' => [
            'label' => 'Дочерние коллекции',
            'actions' => [
                'create_child' => [
                    'label' => 'Создать дочернюю коллекцию',
                ],
            ],
            'table' => [
                'children_count' => [
                    'label' => 'Кол-во дочерних',
                ],
                'name' => [
                    'label' => 'Название',
                ],
            ],
        ],
        'edit' => [
            'label' => 'Основная информация',
        ],
        'products' => [
            'label' => 'Товары',
            'actions' => [
                'attach' => [
                    'label' => 'Прикрепить товар',
                ],
            ],
        ],
    ],

];
