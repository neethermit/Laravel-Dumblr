<!-- Para subir una cancion -->
<div id="modalSubir" class="modal">
    <div class="modal-content">
        <form method="POST" action="/music" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modalBlock">
                <label>Nombre de la Canci&oacute;n:</label>
                <br>
                <input type="text" class="inputmodal" name="name">
                <br>
                <label>Autor o Grupo:</label>
                <br>
                <input type="text" class="inputmodal" name="author">
                <br>

                <label>Selecionar Archivo</label>
                <br>
                <input type="file" name="song" id="song-archive" accept=".mp3,audio/*">
                <br>
                <div class="flexdiv">
                    <label style="margin-right:10px;margin-top:10px">Duracion:</label>
                    <br>
                    <input type="text" id="uploadmin" class="inputmodal duracionmodal" name="minutes">
                    <label style="font-size:25px">:</label>
                    <input type="text" id="uploadsec" class="inputmodal duracionmodal" name="seconds">
                </div>
                <label>Portda de canci&oacute;n:</label>
                <br>
                <div style="display:flex">
                    <div class="uploadbutton">
                        <input type="button" id="my-button1" class="subirImagen" value="Select Files">
                        <input type="file" name="image" id="my-file1" accept="image/*">
                    </div>
                    <span class="uploadphoto"></span>
                </div>
                <br>
                <div class="flexdiv">
                    <button type="button" id="Salir" class="salir">Cancelar</button>
                    <button type="submit" class="terminar">Subir</button>
                </div>
            </div>
        </form>
    </div>
</div>