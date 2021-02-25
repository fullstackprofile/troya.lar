<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsSteelmax extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_steelmax.config');
            $allLists = $constants['label']['calcs_steelmax']['ru'];
            $list = array(
                "position" => 15,
                "type" => 'calcs_steelmax',
                "title" => $allLists['calcs_steelmax'],
                "items" => array(
                    1 => $allLists['calc_type_1'],
                    3 => $allLists['calc_type_3'],
                    2 => $allLists['calc_type_2'],
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
