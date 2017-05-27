<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\Classes\Utility;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('update_song');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo '<h1>Estas en STORE</h1>';
        echo 'Minutos: ' . $request->minutes . "<br>";
        echo 'Segundos: ' . $request->seconds;
        $song = new Music;
        $song->listener_id = session('user')->id;
        
        $song->image_url = Utility::moveToServer($request, 'image');
        
        $song->name = $request->name;
        $song->author = $request->author;
        
        $song->url = Utility::moveToServer($request, 'song');
        
        $song->minutes = $request->minutes;
        $song->seconds = $request->seconds;
        $song->save();
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = DB::table('fullSong')->where('id', $id)->get();
        //$myRemarks = DB::select('call songRemarks(?)',array($music->id));
        $myRemarks = \App\Classes\Utility::pagination("\\music\\$id", 'call songRemarks(?)', array($song[0]->id), 4);
        $playlists = \App\Playlist::where('listener_id', session('user')->id)->where('erased', 0)->get();
        return view('comments', ['music' => $song[0], 'playlists' => $playlists, 'myRemarks' => $myRemarks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $song = Music::findOrFail($id);
        if(Utility::canUpdate($song)){
            $name = $request->name;
            $author = $request->author;
            $image_url = Utility::moveToServer($request, 'image', $song);

            $song->image_url = $image_url;
            $song->name = $name;
            $song->author = $author;
            $song->save();
        }
        
        return redirect('/dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Music::findOrFail($id);
        if(Utility::canUpdate($song)){
            $song->erased = '1';
            $song->save();
        }
        
        return redirect('/dashboard');
    }
}
