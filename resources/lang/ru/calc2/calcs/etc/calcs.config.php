<?php

$field = array(
    'calcs' => array(
        'calc_id' => array(
            'name'          => 'calc_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'calc_model' => array(
            'name'          => 'calc_model',
            'type'          => 'string',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'psrequest_id' => array(
            'name'          => 'psrequest_id',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'user_id' => array(
            'name'          => 'user_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'region_id' => array(
            'name'          => 'region_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'city' => array(
            'name'          => 'city',
            'type'          => 'string',
            'element'       => 'text',
            'is_required'   => 1,
        ),
        'title' => array(
            'name'          => 'title',
            'type'          => 'string',
            'element'       => 'text',
            'is_required'   => 1,
        ),
        'comments' => array(
            'name'          => 'comments',
            'type'          => 'string',
            'element'       => 'text',
            'is_required'   => 1,
        ),
        'date_created' => array(
            'name'          => 'date_created',
            'type'          => 'date',
            'element'       => 'date',
            'is_required'   => 1,
            'format'        => 'd.m.Y',
        ),
        'is_completed' => array(
            'name'          => 'is_completed',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
    ),
);

$label = array(
    'calcs' => array(
        'ru' => array(
            'calcs' => 'Мои расчёты',
            'clients' => 'Расчёты клиентов',
            'id' => 'Номер расчёта',
            'calc_id' => 'Calc ID',
            'calc_model' => 'Тип расчёта',
            'psrequest_id' => 'Связанный запрос',
            'user_id' => 'Пользователь',
            'manager_id' => 'Менеджер',
            'engineer_id' => 'Инженер',
            'office_id' => 'Офис',
            'region_id' => 'Регион объекта',
            'city' => 'Населенный пункт',
            'title' => 'Название объекта',
            'comments' => 'Заменить текст примечания на странице печати', //'Комментарий',
            'date_created' => 'Дата создания',
            'list' => 'Список расчётов',
            'download' => 'Скачать',
        ),
    ),
);

