<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UpdateDataUserController extends Controller
{
    public function updatenameandsumname(Request $request){

      $id = Auth::id();

      $name = DB::update('update users set name = ?  where id = ?',[$request->name, $id]);
      $sumname = DB::update('update users set sumname = ?  where id = ?',[$request->sumname, $id]);

      return redirect(route('user.project'));

    }

    public function updatepassword(Request $request){

      $id = Auth::id();
      $user = Auth::user();

      if (Hash::check($request->old_password, $user->password)) {
        $old_password = Hash::make($request->old_password);
        $password = DB::update('update users set password = ?  where id = ?',[$old_password, $id]);
        return redirect(route('user.project'));
      }
      return redirect(route('user.project'));

    }
}
