<?php

return [

    'label' => 'Атрибут',

    'plural_label' => 'Атрибуты',

    'table' => [
        'name' => [
            'label' => 'Название',
        ],
        'description' => [
            'label' => 'Описание',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'type' => [
            'label' => 'Тип',
        ],
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Тип',
        ],
        'name' => [
            'label' => 'Название',
        ],
        'description' => [
            'label' => 'Описание',
            'helper' => 'Используется для подсказки под полем ввода',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
        'searchable' => [
            'label' => 'Поисковый',
        ],
        'filterable' => [
            'label' => 'Фильтруемый',
        ],
        'required' => [
            'label' => 'Обязательный',
        ],
        'type' => [
            'label' => 'Тип',
        ],
        'validation_rules' => [
            'label' => 'Правила валидации',
            'helper' => 'Правила для поля атрибута, например: min:1|max:10|...',
        ],
    ],
];
