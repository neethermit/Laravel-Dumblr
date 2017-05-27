<!-- Eliminar cancion -->
<div class="modal" id="eraseSongId{{ $id }}">
    <div class="modal-content">
        <div class="modalBlock">
            <label>¿Estás seguro que quieres borrar {{ $name }}?</label>
            <br>
            <br>
            <div class="divflex">
                <form method="POST" action="{{ route('music.destroy', $id) }}">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <button type="button" class="salir" onclick="closeEraseSong{{ $id }}()">Cancelar</button>
                    <button type="submit" class="terminar">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function closeEraseSong{{ $id }}(){
    $('body').css('overflow','auto'); 
    $('#eraseSongId' + '{{ $id }}').css('display', 'none');
}
</script>