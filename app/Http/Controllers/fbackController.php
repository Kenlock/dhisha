<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fback;

class fbackController extends Controller
{
    //
    public function getfeeb(Request $feeb){
      $fb= new fback;
        $fb->name=$feeb->fbname;
        $fb->email=$feeb->fbemail;
        $fb->matter=$feeb->fbmatter;
        $fb->save();
        return back();
    }

    public function putfeeb()
    {
      $fbvar=DB::table('fbacks')->get();
      // if($fbvar->count()==0)
      //   return view('feedback',['fbv'=>0]);
      return view('feedback',['fbv'=>$fbvar]);
    }

    public function delfeeb($abc)
    {
      $fb=fback::find($abc);
      $fb->delete();
      putfeeb();
    }
}
