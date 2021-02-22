<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PsrequestStatuses extends Model
{
    public static function selectEventsById($id){
        $query = PsrequestsTwo::select('ps_stat.id', 'ps_stat.user_id', 'ps_stat.status', 'ps_stat.comment',
                                'ps_stat.hours_spent', 'ps_stat.date_created', 'psstatuses.title', 'psstatuses.color', 'users.user_name',
            PsrequestStatuses::raw('DATE_FORMAT(ps_stat.date_created, "%d.%m.%Y %h:%m") as formatted_date'));
        $query->where('psrequests2.id', '=', $id);
        $query->join('psrequest_statuses as ps_stat', 'ps_stat.item_id', '=', 'psrequests2.linked_id');
        $query->join('psstatuses', 'ps_stat.status', '=', 'psstatuses.id');
        $query->join('users', 'ps_stat.user_id', '=', 'users.id');
        return $query->get();
    }

    public static function getReqStatusById($id){
        $query = PsrequestStatuses::select('id', 'status', 'comment');
        $query->where('psrequest_statuses.id', '=', $id);
        return $query->first();
    }

    public static function updateStatusById($id, $statId, $comment){
       return PsrequestStatuses::where('id', $id)->update(['status' => $statId, 'comment' => $comment]);
    }

    public static function deleteReqStatusById($id){
        return PsrequestStatuses::where('id', $id)->delete();
    }
}
