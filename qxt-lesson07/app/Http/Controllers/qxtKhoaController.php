<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class qxtKhoaController extends Controller
{
    //doc du lieu tu bang khoa
    public function qxtGetAllKhoa()
    {
        $qxtkhoas = DB::select("Select * from qxtkhoa ");
        return view('qxtkhoa.qxtList',['qxtkhoas' => $qxtkhoas]);

    }
    public function qxtGetKhoa($makh){
        $khoa = DB::select("select * from qxtkhoa where qxtmakh=?", [$makh])[0];
        return view('qxtkhoa.qxtDetail',['khoa'=>$khoa]);
    }
    public function qxtEdit($makh){
        $khoa = DB::select("select * from qxtkhoa where qxtmakh=?", [$makh])[0];
        return view('qxtkhoa.qxtEdit',['khoa'=>$khoa]);
    }
    
}
