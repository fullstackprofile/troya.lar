<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsKns extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_kns.config');
            $allLists = $constants['label']['calcs_kns']['ru'];
            $list = array(
                "position" => 20,
                "type" => 'calcs_kns',
                "title" => $allLists['calcs_kns'],
                "items" => array(
                    1 => $allLists['calc_type_1'],
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
