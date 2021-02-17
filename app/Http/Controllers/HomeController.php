<?php

namespace App\Http\Controllers;

use App\PsrequestsTwo;
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

    public function psRequests($type = null){

        $show = "show-";
        $modify = "modify_status-";
        $reqId = 0;
        $isShow = strpos($type, $show);
        $modify = strpos($type, $modify);
        $clientsReq = [];
        $clientReq = [];

        if($modify !== false){
            $modifyId = substr($type, 14, strlen($type)-1);
            $view = 'modifyStatus';
        }else if($isShow !== false ){
            $reqId = substr($type, 5, strlen($type)-1);
            $res = PsrequestsTwo::getAllRequests($reqId);
            if($res && count($res)){
                $clientReq = $res[0];
            }
            $view = 'showMyRequest';
        }else if($type == 'clients'){
            $view = 'clientsRequests';

            $clientsReq = PsrequestsTwo::getAllRequests();
        }else {
            $view = 'myRequests';
        }
        $user = Auth::user();
//dd($clientsReq);
//dd($clientReq);
        return view('technicalRequest/'.$view, [
            'user'=> $user,
            'reqId' => $reqId,
//            'clientsReq' => compact('clientsReq'),
            'clientsReq' => $clientsReq,
            'clientReq' => $clientReq,
        ]);
    }
}
