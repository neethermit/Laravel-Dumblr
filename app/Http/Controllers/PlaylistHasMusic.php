<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlaylistHasMusic;

class PlaylistHasMusicA extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->list_option == 1){
            // Hacer una nueva lista
            $playlist = new \App\Playlist;
            $playlist->name = $request->newlist_name;
            $playlist->listener_id = session('user')->id;
            $playlist->save();
            
            $playlistHasMusic = new PlaylistHasMusic;
            $playlistHasMusic->playlist_id = $playlist->id;
            $playlistHasMusic->music_id = $request->music_id;
            $playlistHasMusic->save();
            
            
        }
        else{
            $playlistHasMusic = new PlaylistHasMusic;
            $playlistHasMusic->playlist_id = $request->playlist_id;
            $playlistHasMusic->music_id = $request->music_id;
            $playlistHasMusic->save();
        }
        
        
        
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // En este caso lo usare para borrar
        $playlistHasMusic = PlaylistHasMusic::where('playlist_id', $request->playlist_id)->where('music_id', $request->music_id)->first();
        $playlistHasMusic->erased = '1';
        $playlistHasMusic->save();
        
        return redirect('/dashboard');
        
        /*die('TE HAS MUERTO');
        $playlistHasMusic = PlaylistHasMusic::findOrFail($id);
        if(Utility::canUpdate($playlist)){
            $song->name = $request->name;
            $song->save();
        }
        
        return redirect('/dashboard');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
