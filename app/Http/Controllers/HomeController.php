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
use Illuminate\Support\Facades\File;
/* Calcs Models */
use App\CalcsTrays;
use App\CalcsSteelmax;
use App\CalcsTanks;
use App\CalcsLositems;
use App\CalcsKns;
use App\CalcsInoxpark;
use App\CalcsFloorings;
use App\CalcsTunnels;


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

    /* calcs url data parameters */

    public $calcsUrl = array(
        'calcs_trays' => 'calcs-trays',
        'calcs_steelmax' => 'calcs-steelmax',
        'calcs_tanks' => 'calcs-tanks',
        'calcs_lositems' => 'calcs-los',
        'calcs_kns' => 'calcs-kns',
        'calcs_inoxpark' => 'calcs-inoxpark',
        'calcs_floorings' => 'calcs-floorings',
        'calcs_tunnels' => 'calcs-tunnels'
    );

    /**
     * @noinspection PhpMissingReturnTypeInspection
     * Ps groups config array
     */
    protected function _importGetPsgroupsMeta()
    {
        return array(
            1 => array(10,0),
            13 => array(15,1),
            2 => array(20,2),
            3 => array(25,3),
            4 => array(30,4),
            11 => array(35,5),
            8 => array(40,6),
            9 => array(45,7),
            10 => array(50,8),
            6 => array(55,9),
            12 => array(10,0),
        );
    }

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
        $allCalcs = [];
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
            $allCalcs = $this->getAllListsOfCalculations($reqId);
            $groups = Psgroups::getGroups();
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
            'allCalcs' => $allCalcs,
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

    public function getAllListsOfCalculations($id){
        $result[20] = [];
        $result[10] = $this->getCalcTypeMenuListUrl($id, CalcsTrays::getCalcTypeMenuList());
        $result[15] = $this->getCalcTypeMenuListUrl($id, CalcsSteelmax::getCalcTypeMenuList());
        $resultT20 = $this->getCalcTypeMenuListUrl($id, CalcsTanks::getCalcTypeMenuList());
        $resultL20 = $this->getCalcTypeMenuListUrl($id, CalcsLositems::getCalcTypeMenuList());
        $resultK20 = $this->getCalcTypeMenuListUrl($id, CalcsKns::getCalcTypeMenuList());

        $result[25] = $this->getCalcTypeMenuListUrl($id, CalcsInoxpark::getCalcTypeMenuList());
        $result[30] = $this->getCalcTypeMenuListUrl($id, CalcsFloorings::getCalcTypeMenuList());
        $result[35] = $this->getCalcTypeMenuListUrl($id, CalcsTunnels::getCalcTypeMenuList());

        foreach ($resultT20 as $key => $value) {
            array_push($result[20], $value);
        }
        foreach ($resultL20 as $key => $value) {
            array_push($result[20], $value);
        }
        foreach ($resultK20 as $key => $value) {
            array_push($result[20], $value);
        }

        return $result;
    }


    public function getCalcTypeMenuListUrl($id, $data){
        $result = [];
        if(isset($data['items']) && count($data['items'])){
            foreach ($data['items'] as $key => $item){
                $elem = [
                    "url" => "/".$this->calcsUrl[$data['type']]."/step_1/calc_type-".$key."/psrequest_id-".$id,
                    "title" => $item
                ];
                array_push($result, $elem);
            }
        }
        return $result;
    }

    public function createCloudPath(Request $request){
        $directoryName = $request->input('directory-name');
        $userName = $request->input('user-name');
        $cloudPath = $request->input('cloud-path');

        if($cloudPath !== ""){
            $cloudPath = str_replace("/", "\\", $cloudPath);
        }
        $directoryName = trim($directoryName);
//        $directory = strtolower(str_replace(" ", "-", $directoryName));
        $directory = $directoryName."  (".$userName.")";
        $mainPath = public_path("uploads\cloud\Data\\".$cloudPath);
//        $scan = scandir($mainPath, 1);
        $path = $mainPath.$directory;
        if(!File::exists($path) && $directoryName){
            File::makeDirectory($path, 0777, true, true);
        }

        /* Automatically creates directories */
        if(!File::exists($mainPath."КП внутренних поставщиков")){
            File::makeDirectory($mainPath."КП внутренних поставщиков", 0777, true, true);
        }
        if(!File::exists($mainPath."Материалы для ИПС")){
            File::makeDirectory($mainPath."Материалы для ИПС", 0777, true, true);
        }
        return redirect()->back();
    }

    public function uploadFileInDirectory(Request $request) {
        $file = $request->file('file');
        $cloudPath = $request->input('cloud-path');
        if($cloudPath !== ""){
            $cloudPath = str_replace("/", "\\", $cloudPath);
        }
        if($file){
            $directoryName = trim($request->input('dir_name'));
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $extension = $request->file->extension();
            $allowed = Psfiles::getAllowedFormats();
            $makeRoll = implode( ',', $allowed );
            $request->validate([
                "file" => "required|mimes:".$makeRoll."|max:2048"
            ]);
            if($request->file()){
                $destinationPath = public_path("uploads\cloud\Data\\".$cloudPath."\\".$directoryName);
                $file->move($destinationPath, $fileName);
                return redirect()->back();
            }
            return redirect()->back()->withErrors(['Неправильный формат файла !'.' Доступные форматы: '.$makeRoll]);
        }
        return redirect()->back()->withErrors(['Файл не выбран !']);
    }
}
