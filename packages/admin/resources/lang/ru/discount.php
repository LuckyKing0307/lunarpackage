<?php

return [
    'plural_label' => 'Скидки',
    'label'        => 'Скидка',

    'form' => [
        'conditions' => [
            'heading' => 'Условия',
        ],
        'buy_x_get_y' => [
            'heading' => 'Купи X — получи Y',
        ],
        'amount_off' => [
            'heading' => 'Сумма скидки',
        ],
        'name' => [
            'label' => 'Название',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'starts_at' => [
            'label' => 'Дата начала',
        ],
        'ends_at' => [
            'label' => 'Дата окончания',
        ],
        'priority' => [
            'label'       => 'Приоритет',
            'helper_text' => 'Скидки с более высоким приоритетом применяются первыми.',
            'options'     => [
                'low' => [
                    'label' => 'Низкий',
                ],
                'medium' => [
                    'label' => 'Средний',
                ],
                'high' => [
                    'label' => 'Высокий',
                ],
            ],
        ],
        'stop' => [
            'label' => 'Остановить применение других скидок после этой',
        ],
        'coupon' => [
            'label'       => 'Купон',
            'helper_text' => 'Введите купон для применения скидки. Если оставить пустым — скидка будет применяться автоматически.',
        ],
        'max_uses' => [
            'label'       => 'Макс. использований',
            'helper_text' => 'Оставьте пустым для неограниченного числа использований.',
        ],
        'max_uses_per_user' => [
            'label'       => 'Макс. использований на пользователя',
            'helper_text' => 'Оставьте пустым для неограниченного числа использований.',
        ],
        'minimum_cart_amount' => [
            'label' => 'Минимальная сумма корзины',
        ],
        'min_qty' => [
            'label'       => 'Кол-во товаров',
            'helper_text' => 'Укажите, сколько единиц товара требуется для применения скидки.',
        ],
        'reward_qty' => [
            'label'       => 'Кол-во бесплатных позиций',
            'helper_text' => 'Сколько единиц товара будет со скидкой.',
        ],
        'max_reward_qty' => [
            'label'       => 'Макс. кол-во вознаграждений',
            'helper_text' => 'Максимальное число товаров, к которым может быть применена скидка независимо от условий.',
        ],
        'automatic_rewards' => [
            'label'       => 'Автоматически добавлять вознаграждения',
            'helper_text' => 'Включите, чтобы автоматически добавлять товары-вознаграждения, если их нет в корзине.',
        ],
    ],

    'table' => [
        'name'      => [
            'label' => 'Название',
        ],
        'status'    => [
            'label' => 'Статус',
            \Lunar\Models\Discount::ACTIVE    => [
                'label' => 'Активна',
            ],
            \Lunar\Models\Discount::PENDING   => [
                'label' => 'Ожидает',
            ],
            \Lunar\Models\Discount::EXPIRED   => [
                'label' => 'Истекла',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'Запланирована',
            ],
        ],
        'type'      => [
            'label' => 'Тип',
        ],
        'starts_at' => [
            'label' => 'Дата начала',
        ],
        'ends_at'   => [
            'label' => 'Дата окончания',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'Доступность',
        ],
        'limitations'  => [
            'label' => 'Ограничения',
        ],
    ],

    'relationmanagers' => [
        'collections' => [
            'title'       => 'Коллекции',
            'description' => 'Выберите коллекции, к которым будет применяться скидка.',
            'actions'     => [
                'attach' => [
                    'label' => 'Прикрепить коллекцию',
                ],
            ],
            'table'       => [
                'name' => [
                    'label' => 'Название',
                ],
                'type' => [
                    'label'      => 'Режим',
                    'limitation' => [
                        'label' => 'Ограничение',
                    ],
                    'exclusion' => [
                        'label' => 'Исключение',
                    ],
                ],
            ],
            'form'        => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Ограничение',
                        ],
                        'exclusion' => [
                            'label' => 'Исключение',
                        ],
                    ],
                ],
            ],
        ],

        'customers' => [
            'title'       => 'Клиенты',
            'description' => 'Выберите клиентов, к которым будет применяться скидка.',
            'actions'     => [
                'attach' => [
                    'label' => 'Прикрепить клиента',
                ],
            ],
            'table'       => [
                'name' => [
                    'label' => 'Название',
                ],
            ],
        ],

        'brands' => [
            'title'       => 'Бренды',
            'description' => 'Выберите бренды, к которым будет применяться скидка.',
            'actions'     => [
                'attach' => [
                    'label' => 'Прикрепить бренд',
                ],
            ],
            'table'       => [
                'name' => [
                    'label' => 'Название',
                ],
                'type' => [
                    'label'      => 'Режим',
                    'limitation' => [
                        'label' => 'Ограничение',
                    ],
                    'exclusion' => [
                        'label' => 'Исключение',
                    ],
                ],
            ],
            'form'        => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Ограничение',
                        ],
                        'exclusion' => [
                            'label' => 'Исключение',
                        ],
                    ],
                ],
            ],
        ],

        'products' => [
            'title'       => 'Товары',
            'description' => 'Выберите товары, к которым будет применяться скидка.',
            'actions'     => [
                'attach' => [
                    'label' => 'Добавить товар',
                ],
            ],
            'table'       => [
                'name' => [
                    'label' => 'Название',
                ],
                'type' => [
                    'label'      => 'Режим',
                    'limitation' => [
                        'label' => 'Ограничение',
                    ],
                    'exclusion' => [
                        'label' => 'Исключение',
                    ],
                ],
            ],
            'form'        => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Ограничение',
                        ],
                        'exclusion' => [
                            'label' => 'Исключение',
                        ],
                    ],
                ],
            ],
        ],

        'rewards' => [
            'title'       => 'Вознаграждения',
            'description' => 'Выберите товары-вознаграждения, которые будут применяться при выполнении условий.',
            'actions'     => [
                'attach' => [
                    'label' => 'Добавить товар',
                ],
            ],
            'table'       => [
                'name' => [
                    'label' => 'Название',
                ],
                'type' => [
                    'label'      => 'Режим',
                    'limitation' => [
                        'label' => 'Ограничение',
                    ],
                    'exclusion' => [
                        'label' => 'Исключение',
                    ],
                ],
            ],
            'form'        => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Ограничение',
                        ],
                        'exclusion' => [
                            'label' => 'Исключение',
                        ],
                    ],
                ],
            ],
        ],

        'conditions' => [
            'title'       => 'Условия товаров',
            'description' => 'Выберите товары, необходимые для применения скидки.',
            'actions'     => [
                'attach' => [
                    'label' => 'Добавить товар',
                ],
            ],
            'table'       => [
                'name' => [
                    'label' => 'Название',
                ],
                'type' => [
                    'label'      => 'Режим',
                    'limitation' => [
                        'label' => 'Ограничение',
                    ],
                    'exclusion' => [
                        'label' => 'Исключение',
                    ],
                ],
            ],
            'form'        => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Ограничение',
                        ],
                        'exclusion' => [
                            'label' => 'Исключение',
                        ],
                    ],
                ],
            ],
        ],

        'productvariants' => [
            'title'       => 'Варианты товаров',
            'description' => 'Выберите варианты товаров, к которым будет применяться скидка.',
            'actions'     => [
                'attach' => [
                    'label' => 'Добавить вариант товара',
                ],
            ],
            'table'       => [
                'name'   => [
                    'label' => 'Название',
                ],
                'sku'    => [
                    'label' => 'SKU',
                ],
                'values' => [
                    'label' => 'Опция(и)',
                ],
            ],
            'form'        => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Ограничение',
                        ],
                        'exclusion' => [
                            'label' => 'Исключение',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
