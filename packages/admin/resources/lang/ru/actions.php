<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'Создать корневую коллекцию',
        ],
        'create_child' => [
            'label' => 'Создать дочернюю коллекцию',
        ],
        'move' => [
            'label' => 'Переместить коллекцию',
        ],
        'delete' => [
            'label' => 'Удалить',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'Обновить статус',
            'wizard' => [
                'step_one' => [
                    'label' => 'Статус',
                ],
                'step_two' => [
                    'label' => 'Рассылки и уведомления',
                    'no_mailers' => 'Нет доступных рассылок для этого статуса.',
                ],
                'step_three' => [
                    'label' => 'Предварительный просмотр и сохранение',
                    'no_mailers' => 'Для предварительного просмотра не выбраны рассылки.',
                ],
            ],
            'notification' => [
                'label' => 'Статус заказа обновлён',
            ],
            'billing_email' => [
                'label' => 'Email для выставления счета',
            ],
            'shipping_email' => [
                'label' => 'Email для отправки',
            ],
        ],

    ],
];
