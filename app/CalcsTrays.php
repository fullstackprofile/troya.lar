<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsTrays extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_trays.config');
            $allLists = $constants['label']['calcs_trays']['ru'];
            $list = array(
                "position" => 10,
                "type" => 'calcs_trays',
                "title" => $allLists['calcs_trays'],
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
