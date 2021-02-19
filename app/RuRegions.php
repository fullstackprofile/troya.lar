<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuRegions extends Model
{
    protected $table = "ruregions";

    public static function getAllRegions(){
        return RuRegions::select('id' , 'region_title')->get();
    }
}
