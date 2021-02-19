<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psdirectories extends Model
{
    public static function getAllDirectoriesByType($type = ""){
        $query = Psdirectories::select('id', 'item_title');
        if($type !== ''){
            $query->where('directory_type', '=', $type);
        }
        return $query->get();
    }
}
