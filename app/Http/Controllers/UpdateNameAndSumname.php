<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateNameAndSumname extends Controller
{
    public function update(Request $request)
    {

      $id = Auth::id();

      $name = DB::update('update users set name = ?  where id = ?',[$request->name, $id]);
      $sumname = DB::update('update users set sumname = ?  where id = ?',[$request->sumname, $id]);

      return redirect(route('user.project'));

    }
}
