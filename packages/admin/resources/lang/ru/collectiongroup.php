<?php

return [

    'label' => 'Группа коллекций',

    'plural_label' => 'Группы коллекций',

    'table' => [
        'name'              => [
            'label' => 'Название',
        ],
        'handle'            => [
            'label' => 'Идентификатор',
        ],
        'collections_count' => [
            'label' => 'Кол-во коллекций',
        ],
    ],

    'form' => [
        'name'   => [
            'label' => 'Название',
        ],
        'handle' => [
            'label' => 'Идентификатор',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Эту группу коллекций нельзя удалить, так как к ней привязаны коллекции.',
            ],
        ],
    ],

];
