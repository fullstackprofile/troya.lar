<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class PsrequestsTwo extends Model
{
    protected $table = "psrequests2";

    public static function getAllRequests($id = null, $type = null, $filters = null){
        $query = PsrequestsTwo::select(
            'psrequests2.id as ps_id',
            'users.user_name',
            'ruregions.region_title',
            'psrequests2.object_name',
            'psrequests2.date_status',
            'psrequests2.date_execution',
            'psstatuses.id as status_id',
            'psstatuses.title',
            'psstatuses.color',
            'psrequests2.object_number',
            'psdirectories.item_code',
            'psdirectories.item_title',
            'psrequests2.top_id',
            'psrequests2.tech_task_description',
            'psrequests2.cloud_path',
            'psrequests2.psgroups_checked'
        )->where('psrequests2.type', $type);
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

        /* Filter part start */
        if($filters && isset($filters['object_number'])){
            $query->where('psrequests2.object_number', '=', $filters['object_number']);
        }

        if($filters && isset($filters['pm_id'])){
            $query->where('psrequests2.pm_id', '=', $filters['pm_id']);
        }

        if($filters && isset($filters['engineer_id'])){
            $query->whereIn('psrequests2.engineer_id', $filters['engineer_id']);
        }

        if($filters && isset($filters['region_id'])){
            $query->where('psrequests2.region_id', '=', $filters['region_id']);
        }

        if($filters && isset($filters['object_name'])){
            $query->where('psrequests2.object_name', '=', $filters['object_name']);
        }

        if($filters && isset($filters['top_id'])){
            $query->whereIn('psrequests2.top_id', $filters['top_id']);
        }

        if($filters && isset($filters['status'])){
            $query->whereIn('psrequests2.status', $filters['status']);
        }

        if($filters && isset($filters['psgroups_checked'])){
            $query->whereIn('psrequests2.psgroups_checked', $filters['psgroups_checked']);
        }

        if($filters && isset($filters['tech_task_filter'])){
            if ($filters['tech_task_filter'] == 1) {
                $query->whereRaw('LENGTH(tech_task_description) > 500');
            } elseif ($filters['tech_task_filter'] == 2) {
                $query->whereRaw('(LENGTH(tech_task_description) = 0 OR ISNULL(tech_task_description))');
            }
        }

        if($filters && (isset($filters['date_execution1']) || isset($filters['date_execution2']))){
            if(isset($filters['date_execution1'])){
                $from = date($filters['date_execution1']);
            }else{
                $from = date('1995-00-00');
            }

            if(isset($filters['date_execution2'])){
                $to = date($filters['date_execution2']);
            }else{
                $to = date("Y-m-d");
            }

            $query->whereBetween('date_execution', [$from, $to]);
        }

        if($filters && (isset($filters['date_status1']) || isset($filters['date_status2']))){
            if(isset($filters['date_status1'])){
                $from = date($filters['date_status1']);
            }else{
                $from = date('1995-00-00');
            }

            if(isset($filters['date_status2'])){
                $to = date($filters['date_status2']);
            }else{
                $to = date("Y-m-d");
            }

            $query->whereBetween('date_status', [$from, $to]);
        }

        /* Filter part end */

        $query->join('users', 'psrequests2.user_id', '=', 'users.id')
            ->join('ruregions', 'psrequests2.region_id', '=', 'ruregions.id')
            ->join('psdirectories', 'psrequests2.top_id', '=', 'psdirectories.id')
            ->join('psstatuses', 'psrequests2.status', '=', 'psstatuses.id')
            ->orderBy('ps_id', 'desc');

        return $query->paginate(10);
    }
}
