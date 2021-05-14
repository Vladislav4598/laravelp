<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class LoginController extends Controller
{
  // public function __construct() {
  //     $this->middleware('guest', ['except' => 'logout']);
  // }
  /**
   * Аутентификация пользователя
   */
  public function authenticate(Request $request) {



      // $request->validate([
      //     'email' => 'required|string|email',
      //     'password' => 'required|string',
      // ]);

  //     $credentials = $request->only('email_a', 'password_a');
  //
  //     if (Auth::attempt($credentials)) {
  //         $request->session()->regenerate();
  //
  //         return redirect()->intended('project');
  //     }
  //
  //     return back()->withErrors([
  //         'email' => 'no',
  //     ]);
  // }

      // $credentials = $request->only('email', 'password');
      //
      // if (Auth::attempt($credentials)) {
      //     return redirect()
      //         ->route('user.index')
      //         ->with('success', 'Вы вошли в личный кабинет');
      // }
      //
      // return redirect()
      //     ->route('auth.login')
      //     ->withErrors('Неверный логин или пароль');

  // /**
  //  * Выход из личного кабинета
  //  */
  // public function logout() {
  //     Auth::logout();
  //     return redirect()
  //         ->route('auth.login')
  //         ->with('success', 'Вы вышли из личного кабинета');

}
