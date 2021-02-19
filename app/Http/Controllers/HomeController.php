<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\PsrequestsTwo;
use App\User;
use App\Calcs;
use App\Psgroups;
use App\Psfiles;
use App\RuRegions;
use App\Psstatuses;
use App\Psdirectories;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $user = Auth::user();
        return view('home/home', ['user'=> $user]);
    }

    public function user()
    {
        return view('home');
    }

    public function customer()
    {
        return view('home');
    }

    public function psRequests(Request $request, $type = null){
        \App::setLocale('ru');
        $user = Auth::user();
        $adminType = 3;
        $show = "show-";
        $modify = "modify_status-";
        $reqId = 0;
        $isShow = strpos($type, $show);
        $modify = strpos($type, $modify);
        $myCalcs = null;
        $clientsReq = [];
        $clientReq = [];
        $managers = [];
        $engineers = [];
        $ruRegions = [];
        $tops = []; // 'Типология объекта' -> ТОП
        $statuses = [];
        $groups = [];
        $psFilters = null;
        $attachFiles = null;

        /* clients filter part */
        $psrequests2Arg = $request->input('psrequests2');
        if($psrequests2Arg !== null && isset($psrequests2Arg['filters'])){
            $psFilters = $psrequests2Arg['filters'];
        }

        if($modify !== false){
            $modifyId = substr($type, 14, strlen($type)-1);
            $view = 'modifyStatus';
        }else if($isShow !== false ){
            $reqId = substr($type, 5, strlen($type)-1);
            $res = PsrequestsTwo::getAllRequests($reqId, $adminType);
            $myCalcs = Calcs::getMyCalcsById($reqId);
            $attachFiles = Psfiles::getAttachFilesById($reqId);
            if($res && count($res)){
                $clientReq = $res[0];
            }
            $view = 'showMyRequest';
        }else if($type == 'clients'){
            $view = 'clientsRequests';

            $clientsReq = PsrequestsTwo::getAllRequests(null, $adminType, $psFilters);
            $managers = User::getAllManagers();
            $engineers = User::getAllEngineers();
            $ruRegions = RuRegions::getAllRegions();
            $tops = Psdirectories::getAllDirectoriesByType('ТОП');
            $statuses = Psstatuses::getAllStatuses();
            $groups = Psgroups::getAllGroups();
        }else {
            $view = 'myRequests';
        }

        return view('technicalRequest/'.$view, [
            'user'=> $user,
            'reqId' => $reqId,
            'clientsReq' => $clientsReq,
            'clientReq' => $clientReq,
            'managers' => $managers,
            'engineers' => $engineers,
            'ruRegions' => $ruRegions,
            'tops' => $tops,
            'statuses' => $statuses,
            'groups' => $groups,
            'psFilters' => $psFilters,
            'myCalcs' => $myCalcs,
            'attachFiles' => $attachFiles,
        ]);
    }
}
