<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProject extends Controller
{
    public function createproject(Request $request)
    {
      $date_start = $request->input('date_start');
      $date_end = $request->input('date_end');

      if (($request->date_start) < ($request->date_end)){
        return "ok";

      }

      return "no";

    }
}
