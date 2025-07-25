<?php

return [

    'label'        => 'Сотрудник',
    'plural_label' => 'Сотрудники',

    'table' => [
        'firstname' => [
            'label' => 'Имя',
        ],
        'lastname'  => [
            'label' => 'Фамилия',
        ],
        'email'     => [
            'label' => 'Email',
        ],
        'admin'     => [
            'badge' => 'Супер администратор',
        ],
    ],

    'form' => [
        'firstname'   => [
            'label' => 'Имя',
        ],
        'lastname'    => [
            'label' => 'Фамилия',
        ],
        'email'       => [
            'label' => 'Email',
        ],
        'password'    => [
            'label' => 'Пароль',
            'hint'  => 'Сбросить пароль',
        ],
        'admin'       => [
            'label'  => 'Супер администратор',
            'helper' => 'Роли супер администратора нельзя изменить в хабе.',
        ],
        'roles'       => [
            'label'  => 'Роли',
            'helper' => ':roles имеют полный доступ',
        ],
        'permissions' => [
            'label' => 'Разрешения',
        ],
        'role'        => [
            'label' => 'Название роли',
        ],
    ],

    'action' => [
        'acl'         => [
            'label' => 'Управление доступом',
        ],
        'add-role'    => [
            'label' => 'Добавить роль',
        ],
        'delete-role' => [
            'label'   => 'Удалить роль',
            'heading' => 'Удалить роль: :role',
        ],
    ],

    'acl' => [
        'title' => 'Управление доступом',
        'tooltip' => [
            'roles-included' => 'Разрешение входит в следующие роли',
        ],
        'notification' => [
            'updated'            => 'Обновлено',
            'error'              => 'Ошибка',
            'no-role'            => 'Роль не зарегистрирована в Lunar',
            'no-permission'      => 'Разрешение не зарегистрировано в Lunar',
            'no-role-permission' => 'Роль и разрешение не зарегистрированы в Lunar',
        ],
    ],

];
