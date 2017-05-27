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
})->name('home');

Route::post('/index', function () {
    $listener = App\Listener::where(['email' => Request::input('correol'), 'password' => Request::input('passwordl')])->get();
    if(isset($listener[0]) && $listener[0]->erased == false){
        session()->put('user', $listener[0]);
        return redirect('/dashboard');
        //return view('dashboard');
    }
    return 'El usuario o la contraseña no corresponden';
    //return view('main');
});

Route::get('/dashboard', function(){
    
    
    $myMusic = \App\Classes\Utility::pagination('\dashboard', 'call mySongs(?)', array(session('user')->id), 5);
    $playlist = App\Playlist::where('listener_id', session('user')->id)->where('erased', 0)->get();
    return view('dashboard', ['playlists' => $playlist, 'myMusic' => $myMusic]); 
});

Route::get('/user/{listener}', function($listener){
    $listener = App\Listener::findOrFail($listener);
    $playlist = App\Playlist::where('listener_id', session('user')->id)->where('erased', 0)->get();
    if($listener->erased != true){
        return view('profile', ['listener' => $listener, 'playlists' => $playlist]);
    }
    return back();
    
});

Route::get('/user/{listener}/playlist', function($listener){
    $listener = App\Listener::findOrFail($listener);
    $playlists = \App\Playlist::where('listener_id', $listener->id)->where('erased', 0)->get();
    return view('user_playlists', ['listener' => $listener, 'playlists' => $playlists]);
});

Route::get('/user/{listener}/subs', function($listener){
    $listener = App\Listener::findOrFail($listener);
    $mySubs = DB::select("call mySubs(?)", array(session('user')->id));
    //$playlists = \App\Playlist::where('listener_id', $listener->id)->where('erased', 0)->get();
    return view('user_subs', ['listener' => $listener, 'mySubs' => $mySubs]);
});

Route::get('/playlist/{playlist}', function($playlist){
    $playlist = App\Playlist::findOrFail($playlist);
    $playlists = App\Playlist::where('listener_id', session('user')->id)->where('erased', 0)->get();
    return view('playlist', ['playlist' => $playlist, 'playlists' => $playlists]);
});

Route::get('/config', function(){
   return view('config'); 
});

Route::get('/search/{what}', function($what){
    //$songs = DB::table('fullSong')->where('name', 'LIKE', '%' . $what . '%')->where('erased', 0)->get();
    //\App\Classes\Utility::pagination('\search\\' . $what, 'call mySongs(?)', array($listener->id), 5);
    
    
    $data = DB::table('fullSong')->where('name', 'LIKE', '%' . $what . '%')->where('erased', 0)->get()->toArray();
    $page = \Illuminate\Support\Facades\Input::get('page', 1);
    $paginate = 5;
    $offSet = ($page * $paginate) - $paginate;
    $itemsForCurrentPage = array_slice($data, $offSet, $paginate, true);
    $myMusic = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($data), $paginate, $page);
    $myMusic->setPath('\search\\' . $what);
    $songs = $myMusic;
    
    $playlists = App\Playlist::where('listener_id', session('user')->id)->where('erased', 0)->get();
    return view('search', ['songs' => $songs, 'playlists' => $playlists]); 
});

Route::get('/close/this/session', function(){
    session()->flush();
   return redirect('/'); 
});

Route::get('/random', function(){
    $music = DB::table('music')->count();
    $song = null;
    while(true){
        $song = \App\Music::findOrFail(rand(1,$music));
        if($song->erased == false){
            break;
        }
    }
   return redirect('/music/' . $song->id); 
});



Route::resource('listener', 'CtrlTest');
Route::resource('music', 'MusicController');
Route::resource('remark', 'RemarkCtrl');
Route::resource('playlist_has_music', 'PHM');
Route::resource('play_list', 'playlistController');
Route::resource('subs', 'SubsCtrl');



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





