<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsLositems extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_lositems.config');
            $allLists = $constants['label']['calcs_lositems']['ru'];
            $list = array(
                "position" => 20,
                "type" => 'calcs_lositems',
                "title" => $allLists['calcs_lositems'],
                "items" => array(
                    3 => $allLists['calc_type_3'],//с аккумулирующим резервуаром для селитебных территорий
                    4 => $allLists['calc_type_4'],//с аккумулирующим резервуаром для предприятий 2-й группы
                    1 => $allLists['calc_type_1'],//проточного типа по расходу сточных вод
                    2 => $allLists['calc_type_2'],//проточного типа по площади водосбора
                )
            );
        }
        return $list;
    }

    public static function getCalcTypeMenuList()
    {
        return self::getCalcTypeList();
    }
}
