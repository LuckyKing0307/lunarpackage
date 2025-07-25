<?php

return [

    'label' => 'Группа атрибутов',

    'plural_label' => 'Группы атрибутов',

    'table' => [
        'attributable_type' => [
            'label' => 'Тип',
        ],
        'name' => [
            'label' => 'Название',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'position' => [
            'label' => 'Позиция',
        ],
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Тип',
        ],
        'name' => [
            'label' => 'Название',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'position' => [
            'label' => 'Позиция',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Эту группу атрибутов нельзя удалить, так как к ней привязаны атрибуты.',
            ],
        ],
    ],
];
