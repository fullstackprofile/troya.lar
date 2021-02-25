<?php

$field = array(
    'calcs_kns' => array(
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

        'coef_n' => array(
            'name'          => 'coef_n',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
            'max' => 1,
        ),
        'param_qr' => array(
            'name'          => 'param_qr',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_tr' => array(
            'name'          => 'param_tr',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_qt' => array(
            'name'          => 'param_qt',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_qm' => array(
            'name'          => 'param_qm',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 1,
        ),
        'param_tn' => array(
            'name'          => 'param_tn',
            'type'          => 'float',
            'element'       => 'float',
            'is_required'   => 0,
        ),
        'param_tk' => array(
            'name'          => 'param_tk',
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
    ),
);

$config = array(
    'calcs_kns' => array(
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
    'calcs_kns' => array(
        'ru' => array(
            //'calcs_kns' => 'Расчет регулирующего объема резервуара КНС',
            'calcs_kns' => 'Расчет очистных сооружений и емкостей TM Rainpark',
            'calc' => 'Расчет',

            'id' => 'Номер расчета',
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
            'calc_type_1' => 'Расчет регулирующего объема резервуара КНС',
            'custom_region_data' => 'Ввести параметры региона вручную',

            'step_1' => 'Шаг 1. Местоположение площади водосбора',
            'step_2' => 'Шаг 2. Характеристика водоотводящей сети',
            'step1' => 'Местоположение площади водосбора',
            'step2' => 'Характеристика водоотводящей сети',
            'step3' => 'Результаты расчета параметров насосной станции',
            'calc_all' => 'Результаты расчёта',
            'search' => 'Поиск расчёта',

            'coef_n' => 'Гидравлический показатель степени, n',
            'param_qr' => 'Расчетный расход дождевого стока на входе в КНС, Qr, л/с',
            'param_tr' => 'Расчетная продолжительность дождя, tr, мин',
            'param_qt' => 'Требуемая производительность насосной станции, Qнс, л/с',
            'param_qm' => 'Максимальная производительность насосной станции, Qнс, л/с',
            'param_tn' => 'Момент времени, при котором расход дождевого стока, поступающего в насосную станцию, начинает превышать ее максимальную производительность, T(н)нс, мин',
            'param_tk' => 'Момент времени, при котором расход дождевого стока, поступающего в насосную станцию, перестаёт превышать её максимальную производительность, T(к)нс, мин',
            'param_w' => 'Рабочий объем резервуара насосной станции, Wнс, м3',

            'validation_message_field_number_max' => 'Слишком большое значение для этого параметра.',
        ),
    ),
);

return array(
    "field" => $field,
    "config" => $config,
    "label" => $label,
);
