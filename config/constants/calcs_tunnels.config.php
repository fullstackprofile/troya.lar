<?php

$field = array(
    'calcs_tunnels' => array(
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
            //'is_required'   => 1,
        ),
        'city_id' => array(
            'name'          => 'city_id',
            'type'          => 'integer',
            'element'       => 'integer',
            //'is_required'   => 1,
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
        'area' => array(
            'name'          => 'area',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'area_1' => array(
            'name'          => 'area_1',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'area_2' => array(
            'name'          => 'area_2',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'area_3' => array(
            'name'          => 'area_3',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'area_4' => array(
            'name'          => 'area_4',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'area_5' => array(
            'name'          => 'area_5',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'area_6' => array(
            'name'          => 'area_6',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'area_7' => array(
            'name'          => 'area_7',
            'type'          => 'float',
            'element'       => 'float',
        ),
        'param_cmid' => array(
            'name'          => 'param_cmid',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),

        'param_ha' => array(
            'name'          => 'param_ha',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_woc' => array(
            'name'          => 'param_woc',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'coef_kf' => array(
            'name'          => 'coef_kf',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'coef_kf_auto' => array(
            'name'          => 'coef_kf_auto',
            'type'          => 'checkbox',
            'element'       => 'checkbox',
        ),
        'coef_kf_type' => array(
            'name'          => 'coef_kf_type',
            'type'          => 'integer',
            'element'       => 'selectbox',
            'is_required'   => 1,
        ),

        'param_lt' => array(
            'name'          => 'param_lt',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_nm' => array(
            'name'          => 'param_nm',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
        ),
        'param_ageo' => array(
            'name'          => 'param_ageo',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_nl' => array(
            'name'          => 'param_nl',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
        ),
        'param_nz' => array(
            'name'          => 'param_nz',
            'type'          => 'integer',
            'element'       => 'integer',
            'is_required'   => 1,
        ),
    ),
);

$config = array(
    'calcs_tunnels' => array(
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
    'calcs_tunnels' => array(
        'ru' => array(
            'calcs_tunnels' => 'Расчет инфильтрационного тоннеля',
            'id' => 'Номер расчета',
            'user_id' => 'Пользователь',
            'manager_id' => 'Менеджер',
            'engineer_id' => 'Инженер',
            'office_id' => 'Офис',
            'region_id' => 'Регион, в котором расположена площадь водосбора',
            'city' => 'Местоположение объекта', // Населенный пункт
            'title' => 'Название объекта',
            'phone' => 'Телефон',
            'comments' => 'Заменить текст примечания на странице печати', //'Комментарий',
            'date_created' => 'Дата создания',

            'custom_region_data' => 'Ввести параметры региона вручную',

            'calc_type' => 'Тип расчета',
            'calc_type_1' => 'Расчет инфильтрационного тоннеля по площади водосбора',
            'calc_type_2' => 'Расчет инфильтрационного тоннеля по объему сточных вод',
            'calc_type_menu_1' => 'Расчет инфильтрационного тоннеля по площади водосбора',
            'calc_type_menu_2' => 'Расчет инфильтрационного тоннеля по объему сточных вод',
            'item_id' => 'Наименование ёмкости',
            'item_type' => 'Тип ёмкости',

            'area' => 'Площадь водосбора общая (F общ), га',
            'area_1' => 'Площадь водосбора (кровли и асфальтобетонные покрытия), га',
            'area_2' => 'Площадь водосбора (брусчатые мостовые и щебеночные покрытия), га',
            'area_3' => 'Площадь водосбора (булыжные мостовые), га',
            'area_4' => 'Площадь водосбора (Щебеночные покрытия, не обработанные вяжущими веществами), га',
            'area_5' => 'Площадь водосбора (гравийные садово-парковые дорожки), га',
            'area_6' => 'Площадь водосбора (грунтовые поверхности (спланированные)), га',
            'area_7' => 'Площадь водосбора (газоны), га',
            'param_c1' => 'Постоянный коэффициент стока 1 (кровли и асфальтобетонные покрытия) (ψ1)',
            'param_c2' => 'Постоянный коэффициент стока 2 (брусчатые мостовые и щебеночные покрытия) (ψ2)',
            'param_c3' => 'Постоянный коэффициент стока 3 (булыжные мостовые) (ψ3)',
            'param_c4' => 'Постоянный коэффициент стока 4 (Щебеночные покрытия, не обработанные вяжущими веществами) (ψ4)',
            'param_c5' => 'Постоянный коэффициент стока 5 (гравийные садово-парковые дорожки) (ψ5)',
            'param_c6' => 'Постоянный коэффициент стока 6 (грунтовые поверхности (спланированные)) (ψ6)',
            'param_c7' => 'Постоянный коэффициент стока 7 (газоны) (ψ7)',
            'param_cmid' => 'Средний коэффициент стока, (Ψmid)',
//            'param_ha' => (defined('COUNTRY') && COUNTRY == 'by'
//                ? 'Максимальный слой осадков за дождь, ha, мм'
//                : 'Максимальный слой осадков за расчетный дождь, мм'
//            ),
            'param_woc' => 'Объем стока от расчетного дождя (Wос), м3',
            'coef_kf' => 'Коэффициент фильтрации грунта (K), м/сут',
            'coef_kf_auto' => 'Ввести коэффициент фильтрации грунта вручную',
            'coef_kf_type' => 'Тип грунта',
            'coef_kf_type_1' => 'Глина',
            'coef_kf_type_2' => 'Суглинок',
            'coef_kf_type_3' => 'Супесь',
            'coef_kf_type_4' => 'Песок пылеватый',
            'coef_kf_type_5' => 'Песок мелкий',
            'coef_kf_type_6' => 'Песок средней крупности',
            'coef_kf_type_7' => 'Песок крупный',
            'param_nl' => 'Количество параллельных линий тоннеля, шт',
            'param_lt' => 'Требуемая длина дренажного тоннеля (Lтон), м',
            'param_nm' => 'Требуемое количество модулей, шт',
            'param_nz' => 'Требуемое количество заглушек, шт',
            'param_ageo' => 'Требуемое количество геотекстиля (Ageo), м2',

            'step_1' => 'Шаг 1. Характеристика площади водосбора',
            'step_2' => 'Шаг 2. Характеристика линии тоннелей',
            'step_3' => 'Шаг 3. Результаты расчёта',
            'step_4' => 'Шаг 4. Итог расчёта',
            'step_5' => 'Шаг 5',
            'step1' => 'Характеристика площади водосбора',
            'step2' => 'Размеры территории для дренажа',
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
