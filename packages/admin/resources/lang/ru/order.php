<?php

return [

    'label'        => 'Заказ',
    'plural_label' => 'Заказы',

    'breadcrumb' => [
        'manage' => 'Управление',
    ],

    'transactions' => [
        'capture'  => 'Снято',
        'intent'   => 'Авторизация',
        'refund'   => 'Возвращено',
        'failed'   => 'Неудачно',
    ],

    'table' => [
        'status'             => ['label' => 'Статус'],
        'reference'          => ['label' => 'Номер заказа'],
        'customer_reference' => ['label' => 'Номер клиента'],
        'customer'           => ['label' => 'Клиент'],
        'tags'               => ['label' => 'Теги'],
        'postcode'           => ['label' => 'Почтовый код'],
        'email'              => [
            'label'        => 'Email',
            'copy_message' => 'Адрес скопирован',
        ],
        'phone'              => ['label' => 'Телефон'],
        'total'              => ['label' => 'Сумма'],
        'date'               => ['label' => 'Дата'],
        'new_customer'       => ['label' => 'Тип клиента'],
        'placed_after'       => ['label' => 'Размещён после'],
        'placed_before'      => ['label' => 'Размещён до'],
    ],

    'form' => [
        'address' => [
            'first_name'    => ['label' => 'Имя'],
            'last_name'     => ['label' => 'Фамилия'],
            'line_one'      => ['label' => 'Адрес, строка 1'],
            'line_two'      => ['label' => 'Адрес, строка 2'],
            'line_three'    => ['label' => 'Адрес, строка 3'],
            'company_name'  => ['label' => 'Компания'],
            'contact_phone' => ['label' => 'Телефон'],
            'contact_email' => ['label' => 'Email'],
            'city'          => ['label' => 'Город'],
            'state'         => ['label' => 'Штат/Область'],
            'postcode'      => ['label' => 'Почтовый код'],
            'country_id'    => ['label' => 'Страна'],
        ],
        'reference'   => ['label' => 'Номер заказа'],
        'status'      => ['label' => 'Статус'],
        'transaction' => ['label' => 'Транзакция'],
        'amount'      => [
            'label' => 'Сумма',
            'hint'  => [
                'less_than_total' => 'Вы собираетесь захватить сумму меньше общей стоимости заказа',
            ],
        ],
        'notes' => ['label' => 'Заметки'],
        'confirm' => [
            'label' => 'Подтвердить',
            'alert' => 'Требуется подтверждение',
            'hint'  => [
                'capture' => 'Подтвердите списание платежа',
                'refund'  => 'Подтвердите возврат средств',
            ],
        ],
    ],

    'infolist' => [
        'notes'                   => [
            'label'       => 'Заметки',
            'placeholder' => 'Заметок нет',
        ],
        'delivery_instructions'   => ['label' => 'Инструкции по доставке'],
        'shipping_total'          => ['label' => 'Стоимость доставки'],
        'paid'                    => ['label' => 'Оплачено'],
        'refund'                  => ['label' => 'Возврат'],
        'unit_price'              => ['label' => 'Цена за единицу'],
        'quantity'                => ['label' => 'Количество'],
        'sub_total'               => ['label' => 'Промежуточный итог'],
        'discount_total'          => ['label' => 'Сумма скидок'],
        'total'                   => ['label' => 'Итого'],
        'current_stock_level'     => ['message' => 'Текущий запас: :count'],
        'purchase_stock_level'    => ['message' => 'На момент заказа: :count'],
        'status'                  => ['label' => 'Статус'],
        'reference'               => ['label' => 'Номер заказа'],
        'customer_reference'      => ['label' => 'Номер клиента'],
        'channel'                 => ['label' => 'Канал'],
        'date_created'            => ['label' => 'Дата создания'],
        'date_placed'             => ['label' => 'Дата размещения'],
        'new_returning'           => ['label' => 'Новый/возвращающийся'],
        'new_customer'            => ['label' => 'Новый клиент'],
        'returning_customer'      => ['label' => 'Повторный клиент'],
        'shipping_address'        => ['label' => 'Адрес доставки'],
        'billing_address'         => ['label' => 'Адрес выставления счёта'],
        'address_not_set'         => ['label' => 'Адрес не указан'],
        'billing_matches_shipping'=> ['label' => 'Совпадает с адресом доставки'],
        'additional_info'         => ['label' => 'Доп. информация'],
        'no_additional_info'      => ['label' => 'Доп. информации нет'],
        'tags'                    => ['label' => 'Теги'],
        'timeline'                => ['label' => 'Хронология'],
        'transactions'            => [
            'label'       => 'Транзакции',
            'placeholder' => 'Транзакций нет',
        ],
        'alert' => [
            'requires_capture'   => 'Необходимо захватить оплату.',
            'partially_refunded' => 'Заказ частично возвращён.',
            'refunded'           => 'Заказ возвращён.',
        ],
    ],

    'action' => [
        'bulk_update_status' => [
            'label'        => 'Обновить статус',
            'notification' => 'Статусы заказов обновлены',
        ],
        'update_status' => [
            'new_status'               => ['label' => 'Новый статус'],
            'additional_content'       => ['label' => 'Доп. содержание'],
            'additional_email_recipient'=> [
                'label'       => 'Доп. получатель email',
                'placeholder' => 'необязательно',
            ],
        ],
        'download_order_pdf' => [
            'label'        => 'Скачать PDF',
            'notification' => 'Скачивание PDF заказа',
        ],
        'edit_address' => [
            'label' => 'Редактировать',
            'notification' => [
                'error' => 'Ошибка',
                'billing_address' => ['saved' => 'Адрес выставления счёта сохранён'],
                'shipping_address'=> ['saved' => 'Адрес доставки сохранён'],
            ],
        ],
        'edit_tags' => [
            'label' => 'Редактировать',
            'form'  => [
                'tags' => [
                    'label'       => 'Теги',
                    'helper_text' => 'Разделяйте теги Enter, Tab или запятой',
                ],
            ],
        ],
        'capture_payment' => [
            'label' => 'Захватить платеж',
            'notification' => [
                'error'   => 'Ошибка при захвате',
                'success' => 'Платёж захвачен',
            ],
        ],
        'refund_payment' => [
            'label' => 'Возврат',
            'notification' => [
                'error'   => 'Ошибка при возврате',
                'success' => 'Возврат выполнен',
            ],
        ],
    ],

];
