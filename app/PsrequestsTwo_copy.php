<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PsrequestsTwo extends Model
{
    protected $table = "psrequests2";

    public static function getAllRequests($id = null){
        $query = PsrequestsTwo::select(
            'psrequests2.id'
//            'users.user_name',
//            'statistics_engineers_loads.item_code',
//            'ruregions.region_title',
//            'psrequests2.object_name',
//            'psrequests2.date_status',
//            'psrequests2.date_execution',
//            'psstatuses.title',
//            'psrequests2.object_number',
//            'psdirectories.item_code',
//            'psdirectories.item_title',
//            'psrequests2.top_id'
        );
//            ->where('psrequests2.type', 3);
        if($id){
             $query->where('psrequests2.id', $id);
             $query->addSelect(['object_number_linked' => function ($q)  use ($id) {
                     $q->select('object_number')
                         ->from('psrequests2')
                         ->where('psrequests2.linked_id', $id)
                         ->limit(1);
                 }]);
             $query->addSelect(
                 User::raw("(SELECT `user_id`  FROM `psrequests2` WHERE `psrequests2`.`id` =".$id.") as user_step_1_id"),
                 User::raw("(SELECT `manager_id`  FROM `users` WHERE `users`.`id` =user_step_1_id) as manager_step_2_id"),
                 User::raw("(SELECT `user_name`  FROM `users` WHERE `users`.`id` =manager_step_2_id) as manager_name")
             );
        }
//        ->where('users.manager_id', 'statistics_engineers_loads.user_id')
//        ->join('statistics_engineers_loads', 'users.manager_id', '=', 'statistics_engineers_loads.user_id')

//        $query->addSelect(['manager_data' => function ($q) use ($id) {
//            $q->select('user_id')
//                ->addSelect(['manager_id' => function ($q2) {
//                    $q2->select('manager_id')
//                        ->from('users')
//                        ->where('users.id', 'users.manager_id')
//                        ->limit(1);
//                }])
//                ->from('psrequests2')
//                ->where('psrequests2.id', $id)
//                ->limit(1);

//            $userId = PsrequestsTwo::select('user_id')->where('psrequests2.id', $id)->first();
//            if($userId && $userId->user_id){
//                $managerId = User::select('manager_id')->where('users.id', $userId->user_id)->first();
//                if($managerId && $managerId->manager_id){
//                    $managerData = User::select('user_name', 'email', 'phone')->where('users.id', $managerId->manager_id)->first();
//                    return $managerData;
////                    dd($managerData);
//                }
//
//            }
//        }])
//        $query->join('users', 'psrequests2.user_id', '=', 'users.id')
//            ->join('ruregions', 'psrequests2.region_id', '=', 'ruregions.id')
//            ->join('psdirectories', 'psrequests2.top_id', '=', 'psdirectories.id')
//            ->join('psstatuses', 'psrequests2.status', '=', 'psstatuses.id')
//        ;
dd($query);
        return $query->get();
    }
}
