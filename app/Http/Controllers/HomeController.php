<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\PsrequestsTwo;
use App\User;
use App\Calcs;
use App\Psgroups;
use App\Psfiles;
use App\RuRegions;
use App\Psstatuses;
use App\Psdirectories;
use App\PsrequestStatuses;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /* Status constants */
    const STATUS_NEW		= 1;
    const STATUS_ENGINEER	= 2;
    const STATUS_WAITING	= 3;
    const STATUS_PROCESS	= 4;
    const STATUS_PREADAPTING	= 45;
    /* deprecated */ const STATUS_ADAPTING	= 5;
    /* deprecated */ const STATUS_COMPLETED	= 6;
    const STATUS_CORRECTION	= 7;
    const STATUS_MATERIALS	= 8;
    /* deprecated */ const STATUS_PREFEEDBACK	= 85;
    /* deprecated */ const STATUS_FEEDBACK	= 9;

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

    /* Status constants data */
    public function getAllowedStatusesConfig($country = 'ru')
    {
        return array(
            self::STATUS_NEW => array(self::STATUS_ENGINEER),
            self::STATUS_ENGINEER => array(self::STATUS_WAITING, self::STATUS_PROCESS, self::STATUS_MATERIALS),
            self::STATUS_WAITING => array(self::STATUS_WAITING, self::STATUS_PROCESS, self::STATUS_MATERIALS),
            self::STATUS_PROCESS => array(self::STATUS_WAITING, self::STATUS_PROCESS, self::STATUS_PREADAPTING, self::STATUS_MATERIALS),
            self::STATUS_PREADAPTING => array(self::STATUS_CORRECTION, self::STATUS_PROCESS, self::STATUS_WAITING), //, self::STATUS_ADAPTING
            /* deprecated */ self::STATUS_ADAPTING => array(self::STATUS_CORRECTION, self::STATUS_PROCESS, self::STATUS_WAITING), //self::STATUS_COMPLETED, , self::STATUS_ADAPTING
            /* deprecated */ self::STATUS_COMPLETED => array(self::STATUS_CORRECTION),//, self::STATUS_FEEDBACK
            //self::STATUS_PREFEEDBACK => array(self::STATUS_CORRECTION, self::STATUS_FEEDBACK),
            self::STATUS_CORRECTION => array(self::STATUS_WAITING, self::STATUS_PROCESS, self::STATUS_MATERIALS),
            self::STATUS_MATERIALS => array(self::STATUS_WAITING, self::STATUS_PROCESS, self::STATUS_MATERIALS),
            //self::STATUS_FEEDBACK => array(self::STATUS_CORRECTION, self::STATUS_FEEDBACK),
        );
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
        $events = [];
        $reqStatus = [];
        $stAllowed = [];
        $psFilters = null;
        $attachFiles = null;

        $statusAllowedData = $this->getAllowedStatusesConfig();

        /* clients filter part */
        $psrequests2Arg = $request->input('psrequests2');
        if($psrequests2Arg !== null && isset($psrequests2Arg['filters'])){
            $psFilters = $psrequests2Arg['filters'];
        }

        if($modify !== false){
            $modifyId = substr($type, 14, strlen($type)-1);
            $statuses = Psstatuses::getAllStatuses();
            $reqStatus = PsrequestStatuses::getReqStatusById($modifyId);
            $view = 'modifyStatus';
        }else if($isShow !== false ){
            $reqId = substr($type, 5, strlen($type)-1);
            $res = PsrequestsTwo::getAllRequests($reqId, $adminType);
            $myCalcs = Calcs::getMyCalcsById($reqId);
            $events = PsrequestStatuses::selectEventsById($reqId);
            $attachFiles = Psfiles::getAttachFilesById($reqId);
            $statuses = Psstatuses::getAllStatuses();
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

        if($clientReq && isset($clientReq->status_id)){
            $stAllowed = $statusAllowedData[$clientReq->status_id];
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
            'events' => $events,
            'reqStatus' => $reqStatus,
            'stAllowed' => $stAllowed,
        ]);
    }

    public function updateStatus(Request $request){
        $reqId = $request->input('id');
        $statusId = $request->input('status-id');
        $statusComment = $request->input('status-comment');

        $validator = Validator::make($request->all(), [
            'status-id' => 'required',
            'status-comment' => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

        $res = PsrequestStatuses::updateStatusById($reqId, $statusId , $statusComment);
        if($res){
            return redirect()->back()->with('success', 'Статус успешно обновлён!');
        }else {
            return redirect()->back()->withErrors("Произошла ошибка во время обновления!");
        }
    }

    public function deleteStatus($id){
        $res = PsrequestStatuses::deleteReqStatusById($id);
        if($res){
            return redirect()->back();
        }else {
            return redirect()->back()->withErrors("Произошла ошибка во время удаление статуса!");
        }
    }
}
