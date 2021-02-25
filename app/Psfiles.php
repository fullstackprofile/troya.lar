<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psfiles extends Model
{

    /* Allowed format files for upload */
    public static $allowed_formats = array(
        'pdf','bmp',
        'jpg','jpeg',
        'png','gif',
        'tiff','tif',
        'dwg','dxf','frw',
        'sldprt','sldasm',
        'ppt','pptx',
        'doc','docx',
        'xls','xlsx',
        'rar','zip','7z'
    );

    public static function getAttachFilesById($id){
        return Psfiles::select('id', 'file_name')->where('item_id', '=', $id)->get();
    }

    public static function getAllowedFormats(){
        return self::$allowed_formats;
    }
}
