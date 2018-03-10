<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\donor
;
class bdonoController extends Controller
{
    //
    public function snd(Request $bg){
      if($bg->bgroup=="...")
       $bgvar=DB::table('donors')->get();
      else
       $bgvar=DB::table('donors')->where('bloodgroup','=',$bg->bgroup)->get();

      return view('donorlist',['bloodlist'=>$bgvar]);
    }
}
