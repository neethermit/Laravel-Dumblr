@extends('main')
@section('TODO')

    <link rel="stylesheet" type="text/css" href="{{ asset('ProfileStyle.css')}}" />

    <div class="container" style="padding:0">
        
        <div class="col-sm-12">
            @component('title')
                @slot('title')
                    {{ "$playlist->name" }}
                @endslot
            @endcomponent
            
        </div>
        
        <div class="col-sm-12 ">
            <!-- El contenedor de las melodías -->
            <div class="songfeed" style="display:flex">
                <div class="filler"></div>
                <ul>
                    <!-- Aqui van cada una de las melodias -->


                    <?php
                       $myMusic = DB::select('call songsInPlaylist(?)',array($playlist->id));
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

                </ul>
                <div class="filler"></div>
            </div>
        </div>
    </div>
@endsection

