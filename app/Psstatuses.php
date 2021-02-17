<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psstatuses extends Model
{
    public static function getAll(){
        return Psstatuses::all();
    }
}
