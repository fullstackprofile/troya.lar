<?php

$field = array(
    'calcs_inoxpark' => array(
        'id' => array(
            'name'          => 'id',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
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
            'attr'  => array(
                'size'  => 20,
            ),
//            'is_required'   => in_array(USER_AREA, array('admin', 'engineer')) ? 0 : 1,
            'min'           => 10,
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
        'tray_id' => array(
            'name'          => 'tray_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'tray_is_valid' => array(
            'name'          => 'tray_is_valid',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'consumption_custom' => array(
            'name'          => 'consumption_custom',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'tray_param_ik' => array(
            'name'          => 'tray_param_ik',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
            'format'        => '%.4f',
        ),
        'tray_width' => array(
            'name'          => 'tray_width',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tray_height_min' => array(
            'name'          => 'tray_height_min',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tray_height_max' => array(
            'name'          => 'tray_height_max',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tray_angle' => array(
            'name'          => 'tray_angle',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tray_section_degree' => array(
            'name'          => 'tray_section_degree',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_h' => array(
            'name'          => 'tray_param_h',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_w' => array(
            'name'          => 'tray_param_w',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_x' => array(
            'name'          => 'tray_param_x',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_rg' => array(
            'name'          => 'tray_param_rg',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_kn' => array(
            'name'          => 'tray_param_kn',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_ky' => array(
            'name'          => 'tray_param_ky',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_kc' => array(
            'name'          => 'tray_param_kc',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_vcan' => array(
            'name'          => 'tray_param_vcan',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
            'is_required'      => 1,
        ),
        'tray_consumption' => array(
            'name'          => 'tray_consumption',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_param_dq' => array(
            'name'          => 'tray_param_dq',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
        ),
        'tray_height_calculated' => array(
            'name'          => 'tray_height_calculated',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tray_section_degree_actual' => array(
            'name'          => 'tray_section_degree_actual',
            'type'          => 'float',
            'element'       => 'float',
            'format'        => '%.2f',
            'is_required'      => 1,
        ),
        'tray_height_hydr_actual' => array(
            'name'          => 'tray_height_hydr_actual',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
    ),
);

$config = array(
    'calcs_inoxpark' => array(
        'print_bottom_text' => array(
            'name'          => 'print_bottom_text',
            'type'          => 'text',
            'element'       => 'textarea',
            'is_required'   => 1,
            'country'       => 'ru',
            'title'         => 'Текст внизу страницы печати'
        ),
    ),
);

$label = array(
    'calcs_inoxpark' => array(
        'ru' => array(
            'calcs_inoxpark' => 'Расчет водоотвода из нержавеющей стали TM Inoxpark',
            'id' => 'Номер расчета',
            'user_id' => 'Пользователь',
            'manager_id' => 'Менеджер',
            'engineer_id' => 'Инженер',
            'office_id' => 'Офис',
            'region_id' => 'Регион строительства',
            'city' => 'Местоположение объекта', // Населенный пункт
            'title' => 'Название объекта',
            'comments' => 'Заменить текст примечания на странице печати', //'Комментарий',
            'date_created' => 'Дата создания',
            'calc_type' => 'Тип расчёта',
            'calc_type_1' => 'Подбор лотка по расходу сточных вод',
            'custom_region_data' => 'Ввести параметры региона вручную',

            'phone' => 'Контактный телефон',

            'step_1' => 'Шаг 1. Характеристика линии лотков',
            'step_2' => 'Шаг 2. Выбор подходящего лотка',
            'step_3' => 'Шаг 3. Итог расчёта',
            'step_4' => 'Шаг 4',
            'step1' => 'Характеристика линии лотков',
            'step2' => 'Выбор подходящего лотка',
            'step3' => 'Результаты расчёта параметров лотка',
            'step4' => '',
            'calc_all' => 'Результаты расчёта',
            'search' => 'Поиск расчёта',

            'tray_id' => 'Наименование лотка',
            'tray_is_valid' => 'Лоток подходит',
            'tray_article' => 'Артикул лотка',
            'consumption_custom' => 'Расчетный расход сточных вод, л/с',
            'tray_param_ik' => 'Уклон линии лотков, i',
            'tray_width' => 'Сечение лотка, мм',
            'tray_height_max' => 'Максимальная высота лотка, мм',
            'tray_height_grate' => 'Высота решетки, мм',
            'tray_height_hydr' => 'Гидравлическая высота лотка, мм',
            'tray_angle' => 'Угол проточной части, α, градусы',
            'tray_angle_rad' => 'Угол проточной части, α, радианы',
            'tray_height_triangle' => 'Высота треугольной части, м',
            'tray_section_degree' => 'Степень наполнения, h/H, доли единицы',
            'tray_param_h' => 'Наполнение, h, м',
            'tray_param_w' => 'Площадь живого сечения потока, ω, м2',
            'tray_param_x' => 'Смоченный периметр, χ, м',
            'tray_param_rg' => 'Гидравлический радиус, R, м',
            'tray_param_kn' => 'Коэффициент шероховатости, nш',
            'tray_param_ky' => 'Показатель степени, y',
            'tray_param_kc' => 'Коэффициент Шези, C',
            'tray_param_vcan' => 'Средняя скорость потока, v, м/с',
            'tray_consumption' => 'Фактический расход по лотку для данной степени наполнения, qл, л/с',
            'tray_param_dq' => 'Невязка расходов, |Δq|',
            'tray_height_min' => 'Минимальная высота лотка, мм',
            'tray_height_calculated' => 'Требуемая высота лотка, мм',
            'tray_section_degree_actual' => 'Фактическая степень наполнения',
            'tray_height_hydr_actual' => 'Фактическая гидравлическая высота лотка, мм',
        ),
    ),
);

return array(
    "field" => $field,
    "config" => $config,
    "label" => $label,
);
