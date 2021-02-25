<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psgroups extends Model
{
    public static function getAllGroups(){
        return Psgroups::select('id', 'title', 'position')->where('is_active', '=', 1)->get();
    }

    public static function getGroups(){
        return Psgroups::select('id', 'title', 'position')->get();
    }
}
