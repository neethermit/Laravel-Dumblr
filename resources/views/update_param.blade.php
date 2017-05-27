<!-- Para editar cualquier cosa-->
<div class="modal" id="update{{ $param }}Id{{ $id }}">
    <div class="modal-content">
        <form method="POST" action="{{ route( $param . '.update', $id) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <div class="modalBlock">
                @foreach($fields as $field)
                    <label>{{ $field['label'] }}</label>
                    <br>
                    <input type="{{ $field['type'] }}" class="inputmodal" name="{{ $field['name'] }}" value="{{ $field['value'] }}">
                    <br>
                @endforeach
                
                <div class="divflex">
                    <button type="button" onclick="closeEdit{{ $param }}Id{{ $id }}()" class="salir">Cancelar</button>
                    <button type="submit" class="terminar">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function closeEdit{{ $param }}Id{{ $id }}(){
    $('body').css('overflow','auto'); 
    $('#update{{ $param }}Id{{ $id }}').css('display', 'none');
}
</script>