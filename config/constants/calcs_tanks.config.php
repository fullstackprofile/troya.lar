<?php

$field = array(
    'calcs_tanks' => array(
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
            'is_required'   => 1,
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
        'param_ha' => array(
            'name'          => 'param_ha',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_hcp' => array(
            'name'          => 'param_hcp',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'coef_cv' => array(
            'name'          => 'coef_cv',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'coef_cs' => array(
            'name'          => 'coef_cs',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_p' => array(
            'name'          => 'param_p',
            'type'          => 'float',
            'element'       => 'selectbox',
            'is_required'   => 1,
            'options' => array(
                '0.33' => 0.33,
                '0.5' => 0.5,
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '5' => 5,
                '10' => 10,
                '20' => 20,
            ),
        ),
        'area_1' => array(
            'name'          => 'area_1',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area_2' => array(
            'name'          => 'area_2',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area_3' => array(
            'name'          => 'area_3',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area_4' => array(
            'name'          => 'area_4',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area_5' => array(
            'name'          => 'area_5',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area_6' => array(
            'name'          => 'area_6',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area_7' => array(
            'name'          => 'area_7',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
            'format' => '%.3f',
        ),
        'area' => array(
            'name'          => 'area',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
            'format' => '%.3f',
        ),
        'param_cmid' => array(
            'name'          => 'param_cmid',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
            'format' => '%.3f',
        ),
        'param_f' => array(
            'name'          => 'param_f',
            'type'          => 'float',
            'element'       => 'float',
            //'is_required'   => 1,
        ),
        'param_hp' => array(
            'name'          => 'param_hp',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_w' => array(
            'name'          => 'param_w',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'provider_id' => array(
            'name'          => 'provider_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),
        'param_n' => array(
            'name'          => 'param_n',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_cz' => array(
            'name'          => 'param_cz',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_wt' => array(
            'name'          => 'param_wt',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),

        'tank_id' => array(
            'name'          => 'tank_id',
            'type'          => 'integer',
            'element'       => 'selectbox',
        ),
        'tank_volume' => array(
            'name'          => 'tank_volume',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tank_diameter' => array(
            'name'          => 'tank_diameter',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
        'tank_length' => array(
            'name'          => 'tank_length',
            'type'          => 'integer',
            'element'       => 'integer',
        ),
    ),
);

$config = array(
    'calcs_tanks' => array(
        'print_bottom_text_tanks' => array(
            'name'          => 'print_bottom_text_tanks',
            'type'          => 'text',
            'element'       => 'textarea',
            'is_required'   => 1,
            'country'       => 'ru',
            'title'         => 'Текст внизу страницы печати (ёмкости)'
        ),
        'print_bottom_text_los' => array(
            'name'          => 'print_bottom_text_los',
            'type'          => 'text',
            'element'       => 'textarea',
            'is_required'   => 1,
            'country'       => 'ru',
            'title'         => 'Текст внизу страници печати (ЛОС)'
        ),
    ),
);

$label = array(
    'calcs_tanks' => array(
        'ru' => array(
            'id' => 'Номер расчета',
            'calcs_tanks' => 'Расчет очистных сооружений и емкостей TM Rainpark',
            'user_id' => 'Пользователь',
            'manager_id' => 'Менеджер',
            'engineer_id' => 'Инженер',
            'office_id' => 'Офис',
            'region_id' => 'Регион, в котором расположена площадь водосбора',
            'city' => 'Месторасположение площади водосбора', // Населенный пункт
            'title' => 'Название объекта',
            'comments' => 'Заменить текст примечания на странице печати', //'Комментарий',
            'date_created' => 'Дата создания',
            'calc_type' => 'Тип расчета',
            'calc_type_1' => 'Ёмкость для накопления дождевого стока',
            //'calc_type_2' => 'Ёмкость для накопления очищенного стока',
            //'calc_type_3' => 'Ёмкость для накопления всего объёма дождевого стока',
            'calc_type_2' => 'Расчет объема ёмкости для накопления очищенного дождевого стока',
            'calc_type_3' => 'Расчет объема ёмкости для накопления максимального суточного объема дождевого стока',
            'calc_type_menu_1' => 'Ёмкость для частного дома',
            'calc_type_menu_2' => 'Расчет объема ёмкости для накопления очищенного дождевого стока',
            'calc_type_menu_3' => 'Расчет объема ёмкости для накопления максимального суточного объема дождевого стока',
/*
1.	Расчет объема ёмкости для накопления очищенного дождевого стока
2.	Расчет объема ёмкости для накопления максимального суточного объема дождевого стока

*/
            'custom_region_data' => 'Ввести параметры региона вручную',
            'provider_id' => 'Поставщик емкости',
//            'param_ha' => (defined('COUNTRY') && COUNTRY == 'by'
//                ? 'Максимальный слой осадков за дождь, ha, мм'
//                : 'Максимальный суточный слой осадков, ha'
//            ),
            'param_hcp' => 'Средний максимум суточного слоя осадков, Hср',
            'coef_cv' => 'Коэффициент вариации суточных осадков, Cv',
            'coef_cs' => 'Коэффициент асимметрии кривой обеспеченности, Cs',
            'area_1' => 'Площадь кровли и асфальтобетонных покрытий, F1, га',
            'area_2' => 'Площадь брусчатых мостовых и щебеночных покрытий, F2, га',
            'area_3' => 'Площадь булыжных мостовых, F3, га',
            'area_4' => 'Площадь щебеночных покрытий, не обработанных вяжущими, F4, га',
            'area_5' => 'Площадь гравийных садово-парковых дорожек, F5, га',
            'area_6' => 'Площадь спланированных грунтовых поверхностей, F6, га',
            'area_7' => 'Площадь газонов, F7, га',
            'param_p' => 'Период однократного превышения расчетной интенсивности, P, годы',
            'area' => 'Площадь водосбора, F, га',
            'coef_c1' => 'Коэффициент стока, Ψ1',
            'coef_c2' => 'Коэффициент стока, Ψ2',
            'coef_c3' => 'Коэффициент стока, Ψ3',
            'coef_c4' => 'Коэффициент стока, Ψ4',
            'coef_c5' => 'Коэффициент стока, Ψ5',
            'coef_c6' => 'Коэффициент стока, Ψ6',
            'coef_c7' => 'Коэффициент стока, Ψ7',
            'param_cmid' => 'Средний коэффициент стока, Ψmid',
            'param_f' => 'Нормированное отклонение, Ф',
            'param_hp' => 'Максимальный суточный слой осадков, Hр, мм',
//            'param_w' => (defined('COUNTRY') && COUNTRY == 'by'
//                ? 'Объем стока от расчетного дождя, направляемый на очистку, Wa, м3'
//                : 'Объем стока от расчетного дождя, направляемый на очистку, Wос.д., м3' // Расчетный объем дождевых вод, отводимых на очистку, Wос, м3
//            ),
            'param_n' => 'Количество параллельно установленных емкостей',
            'param_cz' => 'Коэффициент запаса',
            'param_wt' => 'Требуемый объем емкости, Wемк, м3',

            'tank_custom_title' => 'Нетиповая емкость индивидуального исполнения',
            'tank_id' => 'Наименование емкости',
            'tank_title' => 'Наименование емкости',
            'tank_volume' => 'Объём, м3',
            'tank_diameter' => 'Диаметр, мм',
            'tank_length' => 'Длина, мм',

            'step_1' => 'Шаг 1. Расчет объема ёмкости',
            'step_2' => 'Шаг 2. Итог расчета',
            'step1' => 'Характеристика площади водосбора по типам покрытия',
            'step2' => 'Результаты расчета объема ёмкости',
            'step3' => 'Характеристика ёмкости',
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
