<?php
if(session('user') === null){
    //echo '<script>alert("NO HAS INICIADO SESIÓN");<script>';
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Dumblr</title>
    <link rel="icon" type="image/png" href="{{ asset('Resources/logodumblrv2.png') }}"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('Fonts.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('MainStyle.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('MenuModals.css') }}"/>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/commentsStyle.css')}}"/>
    
    <script src="{{ asset('jquery-3.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
    <!-- La barra de navegación está presente en todas las páginas, este blade debe ser el master -->
    <div class="searchbar container">
        <div class="row">
            <a href="/dashboard">
                <div class="logodiv col-xs-2 col-sm-1 col-lg-2">
                    <div class="row">
                        <span class="logo col-xs-8"></span>
                    </div>
                </div>
            </a>
            <div class="col-xs-10 col-sm-4 col-lg-4">
                <div class="row">
                    <form class="col-xs-12" id="buscador" name="busqueda">
                        <div class="row">
                            <input type="text" class="transparente col-xs-10 col-sm-10" placeholder="Buscar canciones..." id='musicToSearch'>
                            <a onclick="location.replace('/search/' + $('#musicToSearch').val())"><span class="glyphicon glyphicon-search col-xs-2 col-sm-2"></span></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-3">
                <div class="row">
                    <a href="/user/{{ session('user')->id}}/playlist"><span class= "menu col-xs-3 col-sm-2 ">Listas</span></a>
                    <!--<a href="/random"><span class= "menu col-xs-3 col-sm-4 col-lg-4">Musica Aleatoria</span></a>-->
                    <a href="/user/{{ session('user')->id}}/subs"><span class= "menu col-xs-3 col-sm-4 col-lg-4">Subscripciones</span></a>
                    <span class="subir col-xs-3 col-sm-4 col-lg-3 openmodalSubir">Subir audio</span>
                    <a href="/config"><span class="glyphicon glyphicon-cog subir col-xs-2 col-sm-1 col-md-2 col-lg-2"></span></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-lg-3">
                <div class="row">
                    <a href="/user/{{ session('user')->id }}"><span class= "username subir col-sm-8 col-lg-9  visible-sm-block  visible-md-block visible-lg-block ">{{ session('user')->name }}</span>
                 <span class="col-sm-4  userpic  visible-sm-block  visible-md-block visible-lg-block "></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Aqui acaba la barra de navegacion -->
    
    <!-- Para subir una cancion -->
    @component('upload_song')
    @endcomponent
    
    <!-- Cualquier otra cosa debe de incluirse en esta sección-->
    @section('TODO')
    @show
    <!-- Fin de la sección -->
    
    <!-- La barra de reproduccion grande, de la parte inferior-->
    @component('repbar')
    @endcomponent
    
    <!-- Javascripts externos -->
    <script src="{{ asset('dumblrplayer.js') }}"></script>
    <script>
        var myProfileImage = "{{ session('user')->image_url }}";
    </script>
    <script src="{{ asset('modaljs.js') }}"></script>
</body>

</html>