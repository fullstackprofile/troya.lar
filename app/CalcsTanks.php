<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsTanks extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_tanks.config');
            $allLists = $constants['label']['calcs_tanks']['ru'];
            $list = array(
                "position" => 20,
                "type" => 'calcs_tanks',
                "title" => $allLists['calcs_tanks'],
                "items" => array(
//                    1 => $allLists['calc_type_1'],
                    2 => $allLists['calc_type_2'],
                    3 => $allLists['calc_type_3'],
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
