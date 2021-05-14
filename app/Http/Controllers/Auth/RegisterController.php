<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
//   public function __construct() {
//       $this->middleware('guest');
//   }
//
//   /**
//    * Форма регистрации
//    */
//   public function register() {
//       return view('/project');
//   }
// //
//   /**
//    * Добавление пользователя
//    */
//   public function create(Request $request) {
//
//       $request->validate([
//           'name' => 'required|string|max:255',
//           'sumname' => 'required|string|max:255',
//           'email' => 'required|string|email|max:255|unique:users',
//           'password' => 'required|string|min:8|confirmed',
//       ]);
//
//
//       User::create([
//           'name' => $request->name,
//           'sumname' => $request->sumname,
//           'email' => $request->email,
//           'password' => Hash::make($request->password),
//       ]);
//
//       return redirect()
//           ->route('/project')
//           ->with('success', 'Вы успешно зарегистрировались');
//   }
  public function create(Request $request) {

    if ($request->psw != $request->psw_repeat){
      echo "Не успешно";
    }
    else {

      $request->validate([
          // 'name' => 'required|string|max:255',
          // 'sumname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          // 'psw' => 'required|string|min:8|confirmed',
      ]);


    // echo $require->name;
      DB::table('users')->insert([
            'name' => $request->name,
            'sumname' => $request->sumname,
            'email' => $request->email,
            // 'password' => Hash::make('password'),
            'password' => $request->psw,
        ]);
        header("Location: http://localhost/project");
    }


  }



}
