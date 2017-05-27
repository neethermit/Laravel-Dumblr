@extends('main')
@section('TODO')
    <link rel="stylesheet" type="text/css" href="{{ asset('ProfileStyle.css')}}" />
    @component('profile_bar')
        @slot('id')
            {{ $listener->id }}
        @endslot
        @slot('image_profile_url')
            {{ $listener->image_profile_url }}
        @endslot
        @slot('name')
            {{ $listener->name }}
        @endslot
    @endcomponent
    
    <div class="container-fluid" style="margin-top:20px">
        <div class="col-sm-12 col-md-4">
            <div class="flexdiv">
                <div class="filler"></div>
                <div class="contenedor2 descripcion">
                    <label>Genero: <?php if($listener->gender == 1){ echo 'M'; } else{ echo 'F'; } ?> </label>
                    <label style="float:right">{{ $listener->birthday }} </label>
                    <hr>
                    <label>Correo: {{ $listener->email }}</label>
                    <br>
                    <label>Miembro desde: {{ $listener->created_at }}</label>
                    <br>
                    <hr>
                    <a href="/user/{{ $listener->id }}/playlist">
                        <label>Ver listas</label>
                    </a>
                </div>
                <div class="filler"></div>
            </div>
            <!-- No estoy seguro de usar esto -->
            
            <!-- La barra de subscripciones -->
            @component('subscribers', [ 'listener_id' => $listener->id, 'main' => 'True'])
            @endcomponent
            
            <!--<div class="flexdiv">
                <div class="filler"></div>
                <div class="contenedor2 listas">
                    <label>Subscripciones</label>
                    <hr>
                    <ul class="sublist">
                        <li class="subelement">
                            <div class="subscribedto">
                                <div class="subfotodiv"><span class="subfoto" style="background-image:url({{ asset('Resources/shy.jpg') }});"></span>
                                </div>
                                <div class="subname">
                                    <label>Edgar</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="filler"></div>
            </div>-->
            <!--Fin de lo que no estoy seguro de usar-->
        </div>
<!--</div>-->
        <!-- El contenedor de las melodías -->
    <div class="songfeed" style="display:flex">
        <div class="filler"></div>
        <ul>
            <!-- Aqui van cada una de las melodias -->
            
            
            <?php
                $myMusic = \App\Classes\Utility::pagination('\user\\' . $listener->id, 'call mySongs(?)', array($listener->id), 5);
               //$myMusic = DB::select('call mySongs(?)',array($listener->id));
            ?>
            
            @foreach($myMusic as $music)
                @component('song', ['playlists' => $playlists])
                    @slot('id')
                        {{$music->id}}
                    @endslot
                    @slot('listener_id')
                        {{$music->listener_id}}
                    @endslot
                    @slot('listener_name')
                        {{$music->listener_name}}
                    @endslot
                    @slot('postdate')
                        {{$music->created_at}}
                    @endslot
                    @slot('music_name')
                        {{$music->name}}
                    @endslot
                    @slot('author_name')
                        {{$music->author}}
                    @endslot
                    @slot('song_url')
                        {{$music->url}}
                    @endslot
                    @slot('minutes')
                        {{$music->minutes}}
                    @endslot
                    @slot('seconds')
                        {{$music->seconds}}
                    @endslot
                    @slot('image_url')
                        {{$music->image_url}}
                    @endslot
                @endcomponent
            @endforeach
            
            {{ $myMusic->links() }}
            
        </ul>
        <div class="filler"></div>
    </div>


    
    
@endsection
        
<script>
    var profileImageURL = "{{ $listener->image_url }}";
</script>