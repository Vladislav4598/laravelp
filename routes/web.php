<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// прицепить id
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/new', function () {
    return view('new');
});





Route::get('/help', function () {
    return view('help');
});

Route::get('/check1', [\App\Http\Controllers\ArrayNumber::class,'Summaarray']);
Route::get('/check2', [\App\Http\Controllers\ArrayNumber1::class,'Summaarray']);

Route::get('/lol', [\App\Http\Controllers\lol::class,'store']);

Route::get('/check', [\App\Http\Controllers\ChechStringController::class,'Check']);

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create']);

Route::get('/authenticate', [\App\Http\Controllers\LoginController::class, 'authenticate']);

Route::post('/updatenameandsumname',[\App\Http\Controllers\UpdateNameAndSumname::class, 'update'])->middleware('auth')->name('updatenameandsumname');

Route::post('/createproject',[\App\Http\Controllers\CreateProject::class, 'createproject'])->middleware('auth')->name('createproject');

Route::name('user.')->group(function(){
  Route::view('/private','private')->middleware('auth')->name('private');
  Route::view('/project','project')->middleware('auth')->name('project');
  Route::view('/new','new')->middleware('auth')->name('new');
  Route::view('/help','help')->middleware('auth')->name('help');
  Route::view('/admin','admin')->middleware('auth')->name('admin');



  Route::get ('/login',function(){
    if (Auth::check()){
      return redirect(route('user.project'));
    }
    return view('login');
  })->name( 'login');

  Route::post('/login',[\App\Http\Controllers\LoginController::class, 'login']);

  Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
  })->name('logout');

  Route::get('/registration', function(){
    if (Auth::check()){
      return redirect(route('user.project'));
    }
    return view('registration');
  })->name('registration');

  Route::post('/registration',[\App\Http\Controllers\RegistrController::class, 'save']);

});

//
// Route::group([
//     'as' => 'auth.', // имя маршрута, например auth.index
//     'prefix' => 'auth', // префикс маршрута, например auth/index
// ], function () {
//     // форма регистрации
//     Route::get('register', 'Auth\RegisterController@register')
//         ->name('register');
//     // создание пользователя
//     Route::post('register', 'Auth\RegisterController@create')
//         ->name('create');
//
//     Route::get('login', 'Auth\LoginController@login')
//         ->name('login');
//     // аутентификация
//     Route::post('login', 'Auth\LoginController@authenticate')
//         ->name('auth');
//     // выход
//     Route::get('logout', 'Auth\LoginController@logout')
//         ->name('logout');
// });
