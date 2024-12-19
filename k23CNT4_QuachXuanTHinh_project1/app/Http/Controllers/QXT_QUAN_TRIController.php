<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QXT_QUAN_TRIController extends Controller
{
    //
    public function qxtLogin(){
        return view('QxtLogin.qxt-login');
    }
    public function qxtLoginSubmit(Request $request){
        return view('QxtLogin.qxt-login');
    }
}
