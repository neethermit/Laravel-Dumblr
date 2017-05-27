<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemarkCtrl extends Controller
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
        $remark = new \App\Remark;
        $remark->listener_id = session('user')->id;
        $remark->content = $request->content;
        $remark->save();
        
        $musicHasRemark = new \App\MusicHasRemark;
        $musicHasRemark->remark_id = $remark->id;
        $musicHasRemark->music_id = $request->music_id;
        $musicHasRemark->save();
        
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
        echo $id;
        $remark = \App\Remark::findOrFail(($id));
        if(\App\Classes\Utility::canUpdate($remark)){
            $remark->content = $request->content;
            $remark->save();
        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remark = \App\Remark::findOrFail($id);
        if(\App\Classes\Utility::canUpdate($remark)){
            $remark->erased = 1;
            $remark->save();
        }
        
        return back();
    }
}
