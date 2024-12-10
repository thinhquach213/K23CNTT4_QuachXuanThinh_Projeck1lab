<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QxtSessonController extends Controller
{
    // doc du lieu su Session
    public function qxtGetSessionData(Requet $request)
    {
        if( $request->session()->has("k23CNTT4_QuachXuanThinh"))
        {
            echo "<h2> Session Data:". $request->session()->get("k23CNTT4_QuachXuanThinh");
        }
        else{
            echo "<h2> Khong co du lieu trong session </h2>";
        }
    }
    public function qxtStoreSessionData(Request $request)
    {
        $request->session()->put('em da hanh phuc roi nhi','quach xuan thinh _ hoc vien an ninh nhan dan - 2310900100 ');
        echo"<h2> Du lieu da duoc luu vao session</h2>";

    }
    public function qxtDeleteSessionData(Request $request)
    {
        $request->session()->forget('em da hanh phuc roi nhi');
        echo"<h2> Du lieu da duoc xoa khoi   session</h2>";
    }
}
