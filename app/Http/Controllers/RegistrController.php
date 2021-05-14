<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegistrController extends Controller
{
    public function save(Request $request){
      if (Auth::check()){

        return redirect(route('user.project '));
      }
      $ValidateFields = $request->validate([
        'name' => 'required',
        'sumname'=> 'required',
        'email' => 'required',
        'password'=> 'required',
      ]);

      if (User::where('email',$ValidateFields['email'])->exists()){
        return redirect(route('user.registration'))->withErrors('Пользователь с таким email уже зарегистрирован!!!');
      }
      // return $name = $request->input('email');

      $user = User::create($ValidateFields);
      if ($user){
        Auth::login($user);
        return redirect(route('user.project'));
      }

      return redirect(route('user.login'))->withErrors( 'Произошла ошибка при создании!!!');
    }
}
