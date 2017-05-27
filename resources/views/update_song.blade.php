<!-- Para editar una cancion-->
<div class="modal" id="updateSongId{{ $id }}">
    <div class="modal-content">
        <form method="POST" action="{{ route('music.update', $id) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <div class="modalBlock">
                <label>Nombre de la Canci&oacute;n:</label>
                <br>
                <input type="text" class="inputmodal" name="name" value="{{ $name }}">
                <br>
                <label>Autor o Grupo:</label>
                <br>
                <input type="text" class="inputmodal" name="author" value="{{ $author }}">
                <br>
                <label>Portda de canci&oacute;n:</label>
                <br>
                <input type="file" name="image" accept="image/*">
                <!--<div style="display:flex">
                    <div class="uploadbutton">
                        <input type="button" id="my-button1" class="subirImagen" value="Select Files">
                        <input type="file" name="my_file" id="my-file1" accept="image/*">
                    </div>
                    <span class="uploadphoto"></span>
                </div>-->
                <br>
                <div class="divflex">
                    <button type="button" onclick="closeEditSong{{ $id }}()" class="salir">Cancelar</button>
                    <button type="submit" class="terminar">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function closeEditSong{{ $id }}(){
    $('body').css('overflow','auto'); 
    $('#updateSongId{{ $id }}').css('display', 'none');
}
</script>