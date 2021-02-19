<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psfiles extends Model
{
    public static function getAttachFilesById($id){
        return Psfiles::select('id', 'file_name')->where('item_id', '=', $id)->get();
    }
}
