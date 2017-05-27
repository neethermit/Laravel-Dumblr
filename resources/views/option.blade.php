@if(isset($stevanMode))
    <form action="{{ route( $param . '.destroy', $id) }}" method="post" >
        {{csrf_field()}}
        {{ method_field('DELETE') }}
        <button class="sendcomment" style="margin-top:4px;float:right" type="submit">Borrar</button>
    </form>

    @if(isset($fields))
        @component('update_param', ['id' => $id, 'param' => $param, 'fields' => $fields])
        @endcomponent
    @endif


    <script>
    function openEdit{{ $param }}Id{{ $id }}(){
        $('body').css('overflow', 'hidden');
        $('#update{{ $param }}Id{{ $id }}').css('display', 'block');
        //modalAdd.style.display = "block";
    }
    </script>
@else
    <ul class="sublist">
        <li class="subelement">
            <div class="subscribedto">
                @if(isset($resource))
                    <a href="/{{ $resource }}/{{ $id }}" class="flexdiv">
                @endif

                    @if($name !== "None")
                        <div class="subfotodiv"><span class="subfoto listphoto" style="background-image:url({{ $image }});"></span></div>
                    @endif
                    <div class="subname"><span class="nombrelista">{{ $name }}</span></div>
                @if(isset($resource))
                    </a>
                @endif

                    
                
                
                @if(isset($fields))
                
                    <form action="{{ route( $param . '.destroy', $id) }}" method="post" style="margin-bottom:0px">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button class="sendcomment"  style="margin-top:15px;" type="submit">Eliminar</button>
                    </form>
                
                
                    <button class="sendcomment" style="margin-top:15px;" type="button" onclick="openEdit{{ $param }}Id{{ $id }}()">Modificar</button>
                @endif

            </div>
        </li>
    </ul>

    @if(isset($fields))
        @component('update_param', ['id' => $id, 'param' => $param, 'fields' => $fields])
        @endcomponent
    @endif


    <script>
    function openEdit{{ $param }}Id{{ $id }}(){
        $('body').css('overflow', 'hidden');
        $('#update{{ $param }}Id{{ $id }}').css('display', 'block');
        //modalAdd.style.display = "block";
    }
    </script>
@endif


