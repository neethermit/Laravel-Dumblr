<div id="addSong{{ $id }}ToPlaylist" class="modal">
    <div class="modal-content">
        <form action="/playlist_has_music" method="post">
            {{csrf_field()}}
            <input type="hidden" name="music_id" value="{{ $id }}"/>
            <div class="modalBlock">
                <div class="flexdiv">
                    <div>
                        <br>
                        <br>
                        <label>{{ $name }}</label>
                        <br>
                        <label>{{ $author }}</label>
                    </div>
                    <div class="filler"></div>
                    <span class="uploadphoto" style="background-image:url({{ $image_url }});"></span>
                </div>
                <br>
                <hr>
                <label>Añadir a:</label>
                <br>
                <br>
                <input type="radio" name="list_option" value="1" checked>
                <label>Nueva Lista</label>
                <br>
                <input type="text" class="inputmodal" name="newlist_name">
                <br>
                <input type="radio" name="list_option" value="2">
                <label>Lista Existente:</label>
                <br>
                <select class="listascanciones" name="playlist_id">
                    <!-- cada una de las listas -->
                    @foreach($playlists as $playlist)
                        <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
                    @endforeach
                    
                </select>
                <br>
                <br>
                <div class="divflex">
                    <button type="button" onclick="closeAddSong{{ $id }}ToPlaylist()" class="salir">Cancelar</button>
                    <button type="submit" class="terminar">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function closeAddSong{{ $id }}ToPlaylist(){
        $('#addSong{{ $id }}ToPlaylist').css('display', 'none');
        $('body').css('overflow', 'auto');
    }
</script>