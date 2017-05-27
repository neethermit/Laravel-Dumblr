@extends('main')
@section('TODO')
    <link rel="stylesheet" type="text/css" href="{{ asset('/ProfileStyle.css')}}" />
    
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
    <div class="col-sm-12">
        @component('title')
            @slot('title')
                {{ "Listas de $listener->name" }}
            @endslot
        @endcomponent

        <div class="flexdiv">
            <div class="filler"></div>
            <div class="contenedor2 listas listblock">
                
                <!-- Aqui van cada una de las listas-->
                @foreach($playlists as $playlist)
                    <?php
                        $fields = [
                                    'name' => [ 'name' => 'name', 'label' => 'Nombre de la lista de reproduccion', 'type' => 'text', 'value' => $playlist->name]
                                ];
                    ?>
                    @component('option', ['param' => 'play_list', 'fields' => $fields, 'resource' => 'playlist'])
                        @slot('id')
                            {{ $playlist->id }}
                        @endslot
                        @slot('name')
                            {{ $playlist->name }}
                        @endslot
                        @slot('image')
                            {{ "/Resources/nota.png" }}
                        @endslot
                    @endcomponent
                @endforeach
                
                
                
            </div>
            <div class="filler"></div>
        </div>
    </div>
@endsection
<script>
    var profileImageURL = "{{ $listener->image_url }}";
</script>