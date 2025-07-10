<?php

return [
    'dropdown' => [
        'label' => 'Выпадающий список',
        'form' => [
            'lookups' => [
                'label'       => 'Опции',
                'key_label'   => 'Метка',
                'value_label' => 'Значение',
            ],
        ],
    ],
    'listfield' => [
        'label' => 'Список',
    ],
    'text' => [
        'label' => 'Текст',
        'form' => [
            'richtext' => [
                'label' => 'Форматированный текст',
            ],
        ],
    ],
    'translatedtext' => [
        'label' => 'Переведённый текст',
        'form' => [
            'richtext' => [
                'label' => 'Форматированный текст',
            ],
            'locales' => 'Локали',
        ],
    ],
    'toggle' => [
        'label' => 'Переключатель',
    ],
    'youtube' => [
        'label' => 'YouTube',
    ],
    'vimeo' => [
        'label' => 'Vimeo',
    ],
    'number' => [
        'label' => 'Число',
        'form' => [
            'min' => [
                'label' => 'Мин.',
            ],
            'max' => [
                'label' => 'Макс.',
            ],
        ],
    ],
    'file' => [
        'label' => 'Файл',
        'form' => [
            'file_types' => [
                'label'       => 'Разрешённые типы файлов',
                'placeholder' => 'Новый MIME',
            ],
            'multiple' => [
                'label' => 'Разрешить несколько файлов',
            ],
            'min_files' => [
                'label' => 'Мин. файлов',
            ],
            'max_files' => [
                'label' => 'Макс. файлов',
            ],
        ],
    ],
];
