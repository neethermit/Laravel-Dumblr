<li class="playlistsong">
    <div class="playlisttrack">
        <div class="bar colorwhite"></div>
        <div class="trackbackground ">
            <div style="display:flex">
                <label class="postedby"><a href="/user/{{$listener_id}}">{{ $listener_name }}</a></label>
                <div class="filler"></div>
                <label class="postdate">{{ $postdate }}</label>
                <span class="glyphicon glyphicon-remove cross" onclick="openEraseSong{{ $id }}()"></span>
            </div>
            <div style="display:flex">
                <div class="playbutton" id="01" data-songid="{{ $song_url }}">
                    <span class="trackicon glyphicon glyphicon-play"></span>
                </div>
                <div class="trackblock">
                    <label class="trackname">{{ $music_name }}</label>
                    <br>
                    <label class="trackartist">{{ $author_name }}</label>
                    <div class="trackbarcontrols">
                        <div class="trackbarview hidden-xs">

                            <div class="trackbar-remaining"></div>

                            <div class="trackbar-progress"></div>
                            <div class="diamond"></div>
                        </div>
                        <div class="tracktimeblock hidden-xs">
                            <label>{{ $minutes }}:{{ $seconds }}</label>
                        </div>
                    </div>
                    <div style="float:right">
                        <a class="comment" href="/music/{{ $id }}">
                            <span class="glyphicon glyphicon-comment "></span>
                            <span class="actions hidden-xs">Comentar</span>
                        </a>
                        <a class="addlist openmodalEdit" onclick="openEditSong{{ $id }}()" value="{{ $id }}">
                            <span class="glyphicon glyphicon-cog "></span>
                            <span class="actions hidden-xs">Editar</span>
                        </a>
                        <a class="addlist openmodalAdd" onclick="openAddSong{{ $id }}ToPlaylist()">
                            <span class="glyphicon glyphicon-retweet"></span>
                            <span class="actions hidden-xs">Añadir a lista</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="trackart" style="background-image:url({{ $image_url }});"></span>
        </div>
    </div>
    @component('update_song')
        @slot('id')
            {{$id}}
        @endslot
        @slot('name')
            {{$music_name}}
        @endslot
        @slot('author')
            {{$author_name}}
        @endslot
    @endcomponent
    
    <!-- Eliminar cancion -->
    @component('drop_song')
        @slot('id')
            {{$id}}
        @endslot
        @slot('name')
            {{$music_name}}
        @endslot
    @endcomponent
    
    <!-- Añadir canción a una lista de reproduccion-->
    @component('add_song_to_playlist', ['playlists' => $playlists])
        @slot('id')
            {{$id}}
        @endslot
        @slot('name')
            {{$music_name}}
        @endslot
        @slot('author')
            {{$author_name}}
        @endslot
        @slot('image_url')
            {{$image_url}}
        @endslot
    @endcomponent
    
    
    <script>
    function openEditSong{{ $id }}(){
        $('body').css('overflow','hidden'); 
        $('#updateSongId' + '{{ $id }}').css('display', 'block');
    }

    function openEraseSong{{ $id }}(){
        $('body').css('overflow','hidden'); 
        $('#eraseSongId' + '{{ $id }}').css('display', 'block');

    }

    function openAddSong{{ $id }}ToPlaylist(){
        $('body').css('overflow', 'hidden');
        $('#addSong{{ $id }}ToPlaylist').css('display', 'block');
        //modalAdd.style.display = "block";
    }

    </script>
    
</li>
