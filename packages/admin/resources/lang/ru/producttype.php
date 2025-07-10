<?php

return [

    'label'        => 'Тип товара',
    'plural_label' => 'Типы товаров',

    'table' => [
        'name'                          => [
            'label' => 'Название',
        ],
        'products_count'                => [
            'label' => 'Количество товаров',
        ],
        'product_attributes_count'      => [
            'label' => 'Атрибутов товара',
        ],
        'variant_attributes_count'      => [
            'label' => 'Атрибутов вариантов',
        ],
    ],

    'tabs' => [
        'product_attributes' => [
            'label' => 'Атрибуты товара',
        ],
        'variant_attributes' => [
            'label' => 'Атрибуты вариантов',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Название',
        ],
    ],

    'attributes' => [
        'no_groups'     => 'Нет доступных групп атрибутов.',
        'no_attributes' => 'Нет доступных атрибутов.',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Этот тип товара нельзя удалить, так как к нему привязаны товары.',
            ],
        ],
    ],

];
