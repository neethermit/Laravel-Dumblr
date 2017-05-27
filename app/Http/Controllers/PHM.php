<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHM extends Controller
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
            
            $playlistHasMusic = new \App\PlaylistHasMusic;
            $playlistHasMusic->playlist_id = $playlist->id;
            $playlistHasMusic->music_id = $request->music_id;
            $playlistHasMusic->save();
            
            
        }
        else{
            $playlistHasMusic = new \App\PlaylistHasMusic;
            $playlistHasMusic->playlist_id = $request->playlist_id;
            $playlistHasMusic->music_id = $request->music_id;
            $playlistHasMusic->save();
        }
        
        
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
