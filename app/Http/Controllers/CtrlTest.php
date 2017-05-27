<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Utility;

class CtrlTest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Estoy dentro de un controlador LOL";
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
        $listener = new \App\Listener;
        $listener->name = $request->name;
        
        $listener->image_url = Utility::moveToServer($request, 'my_file');
        $listener->image_profile_url = $listener->image_url;
        
        $listener->email = $request->email;
        $listener->password = $request->password;
        $listener->birthday = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day;
        $listener->gender = $request->gender;
        $listener->save();
        
        $listenerFollowListener = new \App\ListenerFollowListener;
        $listenerFollowListener->follower_id = $listener->id;
        $listenerFollowListener->followed_id = $listener->id;
        $listenerFollowListener->save();
        
        
        return redirect()->route('home');
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
        $listener = \App\Listener::findOrFail( session('user')->id );
        
        $name = $listener->name;
        $image_url = $listener->image_url;
        $image_profile_url = $listener->image_profile_url;
        $email = $listener->email;
        $password = $listener->password;
        $birthday = $listener->birthday;
        $gender = $listener->gender;
        
        
        echo '<h1>Nombre: ' . $name . '</h1>';
        echo '<h1>Imagen: ' . $image_url . '</h1>';
        echo '<h1>Portada: ' . $image_profile_url . '</h1>';
        echo '<h1>Correo electrónico: ' . $email . '</h1>';
        echo '<h1>Contraseña: ' . $password . '</h1>';
        echo '<h1>Fecha de nacimiento: ' . $birthday . '</h1>';
        echo '<h1>Genero: ' . $gender . '</h1>';
        
        echo "Los del request<br>";
        
        $result = preg_match("/[0-9]{4}-[0-9]{2}-[0-9]{2}/i", $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day);
        
        
        // PARA EL REQUEST
        if($request->name !== null){
            echo "SI<br>";
            $name = $request->name;
        }
        else{
            echo "NO<br>";
        }
        if($request->email !== null){
            echo "SI<br>";
            $email = $request->email;
        }
        else{
            echo "NO<br>";
        }
        if($request->password !== null){
            echo "SI<br>";
            $password = $request->password;
        }
        else{
            echo "NO<br>";
        }
        
        if($result === 1){
            $birthday = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day;
            echo "<h1>" . "Si coincide" . $birthday . "</h1>";
        }
        else{
            echo '<h1>No coincide</h1>';
        }
        
        if($request->gender !== null){
            echo "SI<br>A" . $request->gender . "A<br>";
            $gender = $request->gender;
        }
        else{
            echo "NO<br>";
        }
        
        $image_aux = Utility::moveToServer($request, 'image');
        $profile_image_aux = Utility::moveToServer($request, 'profile_image');
        if(isset($image_aux)){
            $image_url = $image_aux;
        }
        if(isset($profile_image_aux)){
            $image_profile_url = $profile_image_aux;
        }
        
        // Actualizar
        $listener->name = $name;
        $listener->image_url = $image_url;
        $listener->image_profile_url = $image_profile_url;
        $listener->email = $email;
        $listener->password = $password;
        $listener->birthday = $birthday;
        $listener->gender = $gender;
        $listener->save();
        
        session()->put('user', $listener);
        
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
        $listener = \App\Listener::findOrFail( session('user')->id );
        $listener->erased = true;
        $listener->save();
        
        return redirect('/');
    }
}
