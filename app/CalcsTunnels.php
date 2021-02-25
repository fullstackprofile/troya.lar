<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsTunnels extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_tunnels.config');
            $allLists = $constants['label']['calcs_tunnels']['ru'];
            $list = array(
                "position" => 35,
                "type" => 'calcs_tunnels',
                "title" => $allLists['calcs_tunnels'],
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
