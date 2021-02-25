<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsFloorings extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_floorings.config');
            $allLists = $constants['label']['calcs_floorings']['ru'];
            $list = array(
                "position" => 30,
                "type" => 'calcs_floorings',
                "title" => $allLists['calcs_floorings'],
                "items" => array(
                    1 => $allLists['calc_type_1'],
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
