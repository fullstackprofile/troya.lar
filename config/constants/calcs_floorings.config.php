<?php

$field = array(
    'calcs_floorings' => array(
        'user_id' => array(
            'name'          => 'user_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'region_id' => array(
            'name'          => 'region_id',
            'type'          => 'integer',
            'element'       => 'autocomplete',
            'is_required'   => 1,
        ),
        'city' => array(
            'name'          => 'city',
            'type'          => 'string',
            'element'       => 'combobox',
            'is_required'   => 1,
        ),
        'title' => array(
            'name'          => 'title',
            'type'          => 'string',
            'element'       => 'text',
            'is_required'   => 1,
        ),
        'phone' => array(
            'name'          => 'phone',
            'type'          => 'string',
            'element'       => 'text',
        ),
        'comments' => array(
            'name'          => 'comments',
            'type'          => 'string',
            'element'       => 'textarea',
        ),
        'date_created' => array(
            'name'          => 'date_created',
            'type'          => 'date',
            'element'       => 'date',
            'is_required'   => 1,
            'format'        => 'd.m.Y',
        ),
        'calc_type' => array(
            'name'          => 'calc_type',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
            'attr' => array(
                'first_hint'    => false,
            ),
        ),
        'custom_region_data' => array(
            'name'          => 'custom_region_data',
            'type'          => 'integer',
            'element'       => 'checkbox',
        ),
        'item_id' => array(
            'name'          => 'item_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'item_type' => array(
            'name'          => 'item_type',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
        ),


        'param_tn' => array(
            'name'          => 'param_tn',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'param_sp' => array(
            'name'          => 'param_sp',
            'type'          => 'string',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'param_sn' => array(
            'name'          => 'param_sn',
            'type'          => 'string',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'param_lp' => array(
            'name'          => 'param_lp',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'param_ln' => array(
            'name'          => 'param_ln',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
        ),
        'param_lo' => array(
            'name'          => 'param_lo',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'param_b' => array(
            'name'          => 'param_b',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
        ),
        'param_area' => array(
            'name'          => 'param_area',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_mu' => array(
            'name'          => 'param_mu',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_mn' => array(
            'name'          => 'param_mn',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_fp' => array(
            'name'          => 'param_fp',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_fv' => array(
            'name'          => 'param_fv',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_kh' => array(
            'name'          => 'param_kh',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_tnn' => array(
            'name'          => 'param_tnn',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
    ),
);

$config = array(
    'calcs_floorings' => array(
        'print_bottom_text_1' => array(
            'name'          => 'print_bottom_text_1',
            'type'          => 'text',
            'element'       => 'textarea',
            'is_required'   => 1,
            'country'       => 'ru',
            'title'         => 'Текст внизу страницы печати (расчет массы)'
        ),
        'print_bottom_text_2' => array(
            'name'          => 'print_bottom_text_2',
            'type'          => 'text',
            'element'       => 'textarea',
            'is_required'   => 1,
            'country'       => 'ru',
            'title'         => 'Текст внизу страницы печати (расчет нагрузки)'
        ),
    ),
);

$label = array(
    'calcs_floorings' => array(
        'ru' => array(
            'calcs_floorings' => 'Расчет настила TM Gratepark',
            'id' => 'Номер расчета',
            'user_id' => 'Пользователь',
            'manager_id' => 'Менеджер',
            'engineer_id' => 'Инженер',
            'office_id' => 'Офис',
            'region_id' => 'Регион строительства',
            'city' => 'Местоположение объекта', // Населенный пункт
            'title' => 'Название объекта',
            'phone' => 'Телефон',
            'comments' => 'Заменить текст примечания на странице печати', //'Комментарий',
            'date_created' => 'Дата создания',

            'custom_region_data' => 'Ввести параметры региона вручную',

            'calc_type' => 'Тип расчета',
            'calc_type_1' => 'Расчет массы',
            'calc_type_2' => 'Расчет нагрузки',
            'calc_type_menu_1' => 'Расчет массы',
            'calc_type_menu_2' => 'Расчет нагрузки',
            'item_id' => 'Наименование ёмкости',
            'item_type' => 'Тип ёмкости',

            'param_tn' => 'Тип настила',
            'param_tn_1' => 'Прессованный',
            'param_tn_2' => 'Сварной',
            'param_sp' => 'Размер несущей полосы, мм',
            'param_sn' => 'Размер ячейки настила, мм',
            'param_lp' => 'Расстояние между несущими полосами, мм',
            'param_ln' => 'Длина настила (L), мм',
            'param_lo' => 'Расстояние между опорами (L), мм',
            'param_b' => 'Ширина настила (B), мм',
            'param_area' => 'Площадь настила, м2',
            'param_mu' => 'Удельная масса настила, кг/м2',
            'param_mn' => 'Масса настила, кг',
            'param_fp' => 'Сосредоточенная нагрузка (Fp), дН',
            'param_fv' => 'Распределенная нагрузка (Fv), дН/м2',
            'param_kh' => 'Общая распределенная нагрузка на настил, дН',
            'param_tnn' => 'Тип настила по нагрузке',
            'param_tnn_1' => 'Участок не для ходьбы',
            'param_tnn_2' => 'Участок, по которому можно ходить',
            'param_tnn_3' => 'Участок, проезжий на грузовике массой до 3 тонн',
            'param_tnn_4' => 'Участок, проезжий на грузовике массой до 9 тонн',
            'param_tnn_5' => 'Участок, проезжий на грузовике массой до 30 тонн',

            'step_1' => 'Шаг 1. Характеристика настила',
            'step_2' => 'Шаг 2. Размер настила',
            'step_3' => 'Шаг 3. Результаты расчёта',
            'step_4' => 'Шаг 4. Итог расчёта',
            'step1' => 'Характеристика настила',
            'step2' => 'Размер настила',
            'step3' => 'Результаты расчёта',
            'step4' => 'Итог расчёта',
            'step5' => '',
            'calc_all' => 'Результаты расчёта',
            'search' => 'Поиск расчёта',
        ),
    ),
);

return array(
    "field" => $field,
    "config" => $config,
    "label" => $label,
);
