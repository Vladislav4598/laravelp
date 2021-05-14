<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChechStringController extends Controller
{
    public function Check(Request $request)
    {
        $id = 2;

       $users = DB::select('select * from users where id =?',[ $id]);

       foreach ($users as $user) {
         echo $user->name;
         echo $user->sumname;
         echo $user->email;
       }

       // return redirect(route('help/{id}'));
    }
}
