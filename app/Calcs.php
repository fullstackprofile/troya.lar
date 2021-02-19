<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calcs extends Model
{
    public static function getMyCalcsById($id = null){
        $query = Calcs::select('calcs.id', 'calcs.title', 'ruregions.region_title', 'calcs.calc_model',
                 Calcs::raw('DATE_FORMAT(calcs.date_created, "%d.%m.%Y") as created_date'));
        $query->where('psrequests2.id', '=', $id);
        $query->where('psrequests2.linked_id', '<>', 0);
        $query->join('ruregions', 'calcs.region_id', '=', 'ruregions.id');
        $query->join('psrequests2', 'calcs.psrequest_id', '=', 'psrequests2.linked_id');
        return $query->get();
    }
}
