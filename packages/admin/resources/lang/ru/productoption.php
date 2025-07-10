<?php

return [

    'label'        => 'Опция товара',
    'plural_label' => 'Опции товара',

    'table' => [
        'name'   => [
            'label' => 'Название',
        ],
        'label'  => [
            'label' => 'Метка',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'shared' => [
            'label' => 'Общая',
        ],
    ],

    'form' => [
        'name'   => [
            'label' => 'Название',
        ],
        'label'  => [
            'label' => 'Метка',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'Варианты товара сохранены',
                    ],
                ],
            ],
            'actions' => [
                'cancel'             => [
                    'label' => 'Отмена',
                ],
                'save-options'       => [
                    'label' => 'Сохранить опции',
                ],
                'add-shared-option'  => [
                    'label' => 'Добавить общую опцию',
                    'form'  => [
                        'product_option'       => [
                            'label' => 'Опция товара',
                        ],
                        'no_shared_components' => [
                            'label' => 'Нет доступных общих опций.',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'Добавить опцию',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading'     => 'Нет настроенных опций товара',
                    'description' => 'Добавьте общую или ограниченную опцию, чтобы начать генерировать варианты.',
                ],
            ],
            'options-table' => [
                'title'             => 'Опции товара',
                'configure-options' => [
                    'label' => 'Настроить опции',
                ],
                'table' => [
                    'option' => [
                        'label' => 'Опция',
                    ],
                    'values' => [
                        'label' => 'Значения',
                    ],
                ],
            ],
            'variants-table' => [
                'title'   => 'Варианты товара',
                'actions' => [
                    'create' => [
                        'label' => 'Создать вариант',
                    ],
                    'edit'   => [
                        'label' => 'Редактировать',
                    ],
                    'delete' => [
                        'label' => 'Удалить',
                    ],
                ],
                'empty' => [
                    'heading' => 'Нет настроенных вариантов',
                ],
                'table' => [
                    'new'    => [
                        'label' => 'НОВЫЙ',
                    ],
                    'option' => [
                        'label' => 'Опция',
                    ],
                    'sku'    => [
                        'label' => 'SKU',
                    ],
                    'price'  => [
                        'label' => 'Цена',
                    ],
                    'stock'  => [
                        'label' => 'Остаток',
                    ],
                ],
            ],
        ],
    ],

];
