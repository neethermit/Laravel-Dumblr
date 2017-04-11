<?php

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
    //return '<img src=' . App\Listener::find(3)->image_url . '><br>';
    return view("front");
    //return redirect()->route('def', ['hola' => 'Vengo del main']);
});

Route::post('/index', function () {
    $listener = App\Listener::where(['email' => Request::input('correol'), 'password' => Request::input('passwordl')])->get();
    if(isset($listener[0])){
        session()->put('user', $listener[0]);
        return view('main');
    }
    return 'El usuario o la contraseña no corresponden';
    //return view('main');
});




////LAS RUTAS DE ABAJO SON PARA LAS PRUEBAS

Route::get('/hola/{hola}', function($hola){
    return $hola;
})->name('def');



Route::group(['prefix' => 'admin'], function () {
    Route::get('user', function(){
        return "Estas con nosotros los usuarios";
    });
    Route::get('music', function(){
        return "Las rolas";
    });
});

Route::resource('listener', 'CtrlTest');



