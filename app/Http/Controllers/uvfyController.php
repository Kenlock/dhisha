<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use jeremykenedy\LaravelRoles\Models\Role;




class uvfyController extends Controller
{


    //
    public function uvf($uid)
    {
      $user = User::find($uid);
      $unvRole = Role::find(3);
      $vRole = Role::find(2);

      $user->attachRole($unvRole); // you can pass whole object, or just an id
      $user->detachRole($vRole);
      return redirect('/users');
    }

    public function vf($uid)
    {
      $user = User::find($uid);
      $vRole = Role::find(2);
      $unvRole = Role::find(3);

      $user->attachRole($vRole); // you can pass whole object, or just an id
      $user->detachRole($unvRole);

      return redirect('/users');
    }
}
