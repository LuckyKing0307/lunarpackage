<?php

return [
    'dashboard' => [
        'orders' => [
            'order_stats_overview' => [
                'stat_one' => [
                    'label'    => 'Заказы сегодня',
                    'increase' => ':percentage% увеличение по сравнению с :count вчера',
                    'decrease' => ':percentage% уменьшение по сравнению с :count вчера',
                    'neutral'  => 'Без изменений по сравнению с вчера',
                ],
                'stat_two' => [
                    'label'    => 'Заказы за последние 7 дней',
                    'increase' => ':percentage% увеличение по сравнению с :count за прошлый период',
                    'decrease' => ':percentage% уменьшение по сравнению с :count за прошлый период',
                    'neutral'  => 'Без изменений по сравнению с прошлым периодом',
                ],
                'stat_three' => [
                    'label'    => 'Заказы за последние 30 дней',
                    'increase' => ':percentage% увеличение по сравнению с :count за прошлый период',
                    'decrease' => ':percentage% уменьшение по сравнению с :count за прошлый период',
                    'neutral'  => 'Без изменений по сравнению с прошлым периодом',
                ],
                'stat_four' => [
                    'label'    => 'Продажи сегодня',
                    'increase' => ':percentage% увеличение оборота на :total по сравнению с вчера',
                    'decrease' => ':percentage% уменьшение оборота на :total по сравнению с вчера',
                    'neutral'  => 'Без изменений по сравнению с вчера',
                ],
                'stat_five' => [
                    'label'    => 'Продажи за последние 7 дней',
                    'increase' => ':percentage% увеличение оборота на :total за прошлый период',
                    'decrease' => ':percentage% уменьшение оборота на :total за прошлый период',
                    'neutral'  => 'Без изменений по сравнению с прошлым периодом',
                ],
                'stat_six' => [
                    'label'    => 'Продажи за последние 30 дней',
                    'increase' => ':percentage% увеличение оборота на :total за прошлый период',
                    'decrease' => ':percentage% уменьшение оборота на :total за прошлый период',
                    'neutral'  => 'Без изменений по сравнению с прошлым периодом',
                ],
            ],
            'order_totals_chart' => [
                'heading'   => 'Сумма заказов за последний год',
                'series_one'=> [
                    'label' => 'Текущий период',
                ],
                'series_two'=> [
                    'label' => 'Предыдущий период',
                ],
                'yaxis'    => [
                    'label' => 'Оборот :currency',
                ],
            ],
            'order_sales_chart' => [
                'heading'   => 'Отчет: заказы / продажи',
                'series_one'=> [
                    'label' => 'Заказы',
                ],
                'series_two'=> [
                    'label' => 'Выручка',
                ],
                'yaxis'     => [
                    'series_one' => [
                        'label' => 'Кол-во заказов',
                    ],
                    'series_two' => [
                        'label' => 'Сумма',
                    ],
                ],
            ],
            'average_order_value' => [
                'heading' => 'Средний чек',
            ],
            'new_returning_customers' => [
                'heading'   => 'Новые vs Повторные клиенты',
                'series_one'=> [
                    'label' => 'Новые клиенты',
                ],
                'series_two'=> [
                    'label' => 'Повторные клиенты',
                ],
            ],
            'popular_products' => [
                'heading'     => 'Бестселлеры (последние 12 месяцев)',
                'description' => 'Данные основаны на количестве появлений товара в заказах, а не на количестве проданных единиц.',
            ],
            'latest_orders' => [
                'heading' => 'Последние заказы',
            ],
        ],
    ],
    'customer' => [
        'stats_overview' => [
            'total_orders' => [
                'label' => 'Всего заказов',
            ],
            'avg_spend'    => [
                'label' => 'Средний расход',
            ],
            'total_spend'  => [
                'label' => 'Общий расход',
            ],
        ],
    ],
    'variant_switcher' => [
        'label' => 'Сменить вариант',
        'table' => [
            'sku'    => [
                'label' => 'SKU',
            ],
            'values' => [
                'label' => 'Значения',
            ],
        ],
    ],
];
