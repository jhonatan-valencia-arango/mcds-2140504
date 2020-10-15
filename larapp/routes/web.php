<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

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

//Route::get('helloworld', function () {
//    dd('Hello World');
//});

//Route::get('users', function () {
//    dd(App\User::all());
//});

//Route::get('user/{id}', function ($id) {
//    dd(App\User::find($id));
//});

Route::get('ages', function () {
    $users = App\User::all()->take(10);
    foreach ($users as $user)
    {
        $edad = Carbon::parse($user->birthdate)->age;
        $tiempoTranscurridoCreacion = new Carbon($user->created_at);
        $tiempoTranscurridoCreacion->setLocale('es');
        $tiempo = $tiempoTranscurridoCreacion->diffForHumans();
        dump($user->fullname.' tiene '.$edad.' años,'.' usuario creado '.$tiempo);
    }
});

Route::get('challenge', function () {
    foreach (App\User::all()->take(20) as $user) {
        $years = Carbon::createFromDate($user->birthdate)->diff()->format('%y years old %m months %d days %h hours');
        $since = Carbon::parse($user->created_at);
        $rs[] = $user->fullname." - ".$years." - created ".$since->diffForHumans();
    }
//    dd($rs);

    return view('challenge', ['rs' => $rs]);
});

Route::get('examples', function () {
    $calificaciones = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
    $meses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13 ];
    $usuarios = [];
    $estado = true;

    return view('examples', compact('calificaciones', 'meses', 'usuarios', 'estado'));
});

Route::get('newExamples', function () {
    return view('newExamples');
});

Route::get('lang/{lang}', function($lang) {
    \Session::put('lang', $lang);
    return \Redirect::back();
})->middleware('web')->name('change_lang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Resources
Route::resources([
    'users'             => 'UserController',
//    'categories'        => 'CategoryController',
//    'games'             => 'GameController',
]);

