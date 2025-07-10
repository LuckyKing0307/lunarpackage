<?php

return [
    'tags' => [
        'notification' => [
            'updated' => 'Теги обновлены',
        ],
    ],

    'activity-log' => [
        'input' => [
            'placeholder' => 'Добавить комментарий',
        ],
        'action' => [
            'add-comment' => 'Добавить комментарий',
        ],
        'system' => 'Система',
        'partials' => [
            'orders' => [
                'order_created'  => 'Заказ создан',
                'status_change'  => 'Статус обновлён',
                'capture'        => 'Списание :amount с карты, последние четыре цифры :last_four',
                'authorized'     => 'Авторизация :amount на карту, последние четыре цифры :last_four',
                'refund'         => 'Возврат :amount на карту, последние четыре цифры :last_four',
                'address'        => ':type обновлён',
                'billingAddress' => 'Адрес для выставления счёта',
                'shippingAddress'=> 'Адрес доставки',
            ],
            'update' => [
                'updated' => ':model обновлён',
            ],
            'create' => [
                'created' => ':model создан',
            ],
            'tags' => [
                'updated' => 'Теги обновлены',
                'added'   => 'Добавлено',
                'removed' => 'Удалено',
            ],
        ],
        'notification' => [
            'comment_added' => 'Комментарий добавлен',
        ],
    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'Введите ID YouTube-видео, например: dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'Родительская коллекция',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'Порядок коллекций изменён',
            ],
            'node-expanded' => [
                'danger' => 'Не удалось загрузить коллекции',
            ],
            'delete' => [
                'danger' => 'Не удалось удалить коллекцию',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option'           => [
            'label' => 'Добавить опцию',
        ],
        'delete-option'        => [
            'label' => 'Удалить опцию',
        ],
        'remove-shared-option' => [
            'label' => 'Удалить общую опцию',
        ],
        'add-value'            => [
            'label' => 'Добавить значение',
        ],
        'name' => [
            'label' => 'Название',
        ],
        'values' => [
            'label' => 'Значения',
        ],
    ],
];
