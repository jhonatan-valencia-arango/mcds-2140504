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

Route::get('helloworld', function () {
    dd('Hello World');
});

Route::get('users', function () {
    dd(App\User::all());
});

Route::get('user/{id}', function ($id) {
    dd(App\User::find($id));
});

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

