<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class PsrequestsTwo extends Model
{
    protected $table = "psrequests2";

    public static function getAllRequests($id = null){
        $query = PsrequestsTwo::select(
            'psrequests2.id as ps_id',
            'users.user_name',
            'ruregions.region_title',
            'psrequests2.object_name',
            'psrequests2.date_status',
            'psrequests2.date_execution',
            'psstatuses.title',
            'psstatuses.color',
            'psrequests2.object_number',
            'psdirectories.item_code',
            'psdirectories.item_title',
            'psrequests2.top_id'
        )->where('psrequests2.type', 3);
        if(!$id){
            $query->addSelect(
                User::raw("(SELECT `user_id`  FROM `psrequests2` WHERE `psrequests2`.`id` =ps_id) as user_step_1_id"),
                User::raw("(SELECT `manager_id`  FROM `users` WHERE `users`.`id` =user_step_1_id) as manager_step_2_id"),
                User::raw("(SELECT `user_name`  FROM `users` WHERE `users`.`id` =manager_step_2_id) as manager_name")
            );
            $query->addSelect(
                User::raw("(SELECT `engineer_designer_id` FROM `psrequests2` WHERE `psrequests2`.`linked_id`=ps_id) as object_engineer_designer_id"),
                User::raw("(SELECT `user_name` FROM `users` WHERE `users`.`id`=object_engineer_designer_id) as designer_name"),
                User::raw("(SELECT `email` FROM `users` WHERE `users`.`id`=object_engineer_designer_id) as designer_email"),
                User::raw("(SELECT `phone` FROM `users` WHERE `users`.`id`=object_engineer_designer_id) as designer_phone")
            );
        }else if($id){
             $query->where('psrequests2.id', $id);
             $query->addSelect(['object_number_linked' => function ($q)  use ($id) {
                     $q->select('object_number')
                         ->from('psrequests2')
                         ->where('psrequests2.linked_id', $id)
                         ->limit(1);
                 }
             ]);
             $query->addSelect(
                 User::raw("(SELECT `engineer_designer_id` FROM `psrequests2` WHERE `psrequests2`.`linked_id`=".$id.") as object_engineer_designer_id"),
                 User::raw("(SELECT `user_name` FROM `users` WHERE `users`.`id`=object_engineer_designer_id) as designer_name"),
                 User::raw("(SELECT `email` FROM `users` WHERE `users`.`id`=object_engineer_designer_id) as designer_email"),
                 User::raw("(SELECT `phone` FROM `users` WHERE `users`.`id`=object_engineer_designer_id) as designer_phone")
             );
             $query->addSelect(
                 User::raw("(SELECT `user_id` FROM `psrequests2` WHERE `psrequests2`.`id` =".$id.") as user_step_1_id"),
                 User::raw("(SELECT `email` FROM `users` WHERE `users`.`id` =user_step_1_id) as user_email"),
                 User::raw("(SELECT `phone` FROM `users` WHERE `users`.`id` =user_step_1_id) as user_phone"),
                 User::raw("(SELECT `manager_id` FROM `users` WHERE `users`.`id` =user_step_1_id) as manager_step_2_id"),
                 User::raw("(SELECT `user_name` FROM `users` WHERE `users`.`id` =manager_step_2_id) as manager_name"),
                 User::raw("(SELECT `email` FROM `users` WHERE `users`.`id` =manager_step_2_id) as manager_email"),
                 User::raw("(SELECT `phone` FROM `users` WHERE `users`.`id` =manager_step_2_id) as manager_phone")
             );
        }
        $query->join('users', 'psrequests2.user_id', '=', 'users.id')
            ->join('ruregions', 'psrequests2.region_id', '=', 'ruregions.id')
            ->join('psdirectories', 'psrequests2.top_id', '=', 'psdirectories.id')
            ->join('psstatuses', 'psrequests2.status', '=', 'psstatuses.id')
            ->orderBy('ps_id', 'desc');

        return $query->paginate(10);
    }
}
