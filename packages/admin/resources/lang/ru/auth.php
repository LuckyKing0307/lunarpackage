<?php

return [
    /**
     * Роли
     */
    'roles.admin.label'        => 'Администратор',
    'roles.admin.description'  => 'Администратор с полным доступом',
    'roles.staff.label'        => 'Сотрудник',
    'roles.staff.description'  => 'Сотрудник с базовым доступом',

    /**
     * Разрешения
     */
    'permissions.settings.label'                    => 'Настройки',
    'permissions.settings.description'              => 'Дает доступ к разделу настроек хаба',
    'permissions.settings:core.label'               => 'Основные настройки',
    'permissions.settings:core.description'         => 'Доступ к базовым настройкам магазина: каналы, языки, валюты и т.д.',
    'permissions.settings:manage-staff.label'       => 'Управление сотрудниками',
    'permissions.settings:manage-staff.description' => 'Позволяет редактировать других сотрудников',
    'permissions.settings:manage-attributes.label'  => 'Управление атрибутами',
    'permissions.settings:manage-attributes.description' => 'Позволяет создавать и редактировать дополнительные атрибуты',

    'permissions.catalog:manage-products.label'        => 'Управление товарами',
    'permissions.catalog:manage-products.description'  => 'Позволяет редактировать товары, типы товаров и бренды',
    'permissions.catalog:manage-collections.label'     => 'Управление коллекциями',
    'permissions.catalog:manage-collections.description' => 'Позволяет редактировать коллекции и их группы',

    'permissions.sales:manage-orders.label'        => 'Управление заказами',
    'permissions.sales:manage-orders.description'  => 'Позволяет обрабатывать заказы',
    'permissions.sales:manage-customers.label'     => 'Управление клиентами',
    'permissions.sales:manage-customers.description' => 'Позволяет управлять информацией о клиентах',
    'permissions.sales:manage-discounts.label'     => 'Управление скидками',
    'permissions.sales:manage-discounts.description' => 'Позволяет создавать и редактировать скидки',
];
