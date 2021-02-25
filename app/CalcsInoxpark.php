<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcsInoxpark extends Model
{
    public static function getCalcTypeList()
    {
        static $list;
        if (is_null($list)) {
            $constants = config('constants.calcs_inoxpark.config');
            $allLists = $constants['label']['calcs_inoxpark']['ru'];
            $list = array(
                "position" => 25,
                "type" => 'calcs_inoxpark',
                "title" => $allLists['calcs_inoxpark'],
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
