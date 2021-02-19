<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psgroups extends Model
{
    public static function getAllGroups(){
        return Psgroups::select('id', 'title')->where('is_active', '=', 1)->get();
    }
}
