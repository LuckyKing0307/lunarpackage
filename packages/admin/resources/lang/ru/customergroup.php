<?php

return [

    'label' => 'Группа клиентов',

    'plural_label' => 'Группы клиентов',

    'table' => [
        'name'   => [
            'label' => 'Название',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'default' => [
            'label' => 'По умолчанию',
        ],
    ],

    'form' => [
        'name'   => [
            'label' => 'Название',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'default' => [
            'label' => 'По умолчанию',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Эту группу клиентов нельзя удалить, так как к ней привязаны клиенты.',
            ],
        ],
    ],

];
