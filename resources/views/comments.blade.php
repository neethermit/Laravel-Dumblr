@extends('main')
@section('TODO')
    <link rel="stylesheet" type="text/css" href="{{ asset('/ProfileStyle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/commentsStyle.css')}}"/>
    <div class="col-sm-12">
        @component('title')
            @slot('title')
                {{ $music->name }}
            @endslot
        @endcomponent
        
        <div class="songfeed" style="display:flex">
            <div class="filler"></div>
            <ul>
                <!-- La melodia -->
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
            </ul>
            <div class="filler"></div>
        </div>
        <div class="commentfeed flexdiv">
           <div class="filler"></div>
           <ul>
              <li>
                 <div class="commentblock">
                    <div>
                       <span class="commentpic" style="background-image:url({{ session('user')->image_url }});"></span>
                    </div>
                    <div class="bubble">
                       <div style="display:flex">
                          <label class="postedby">Publicado por: {{ session('user')->name }}</label> 
                          <div class="filler"></div>
                          <label class="postdate" >{{ "Ahora" }}</label>
                       </div>
                       <div style="display:flex;" class="commenttext">
                            <form action="/remark" method="POST" style="width:100%">
                                {{csrf_field()}}
                                <input type="hidden" name="music_id" value="{{ $music->id }}"/>
                                <textarea class="inputcomment" name="content"></textarea>
                                <button type="submit" class="sendcomment">Comentar</button>
                            </form>
                       </div>
                    </div>
                 </div>
              </li>
                <!-- Para cada uno de los comentarios -->
                @foreach($myRemarks as $remark)
                    <?php
                        $fields = [
                                    'content' => [ 'name' => 'content', 'label' => 'Tu comentario', 'type' => 'text', 'value' => $remark->content]
                                ];
                    ?>
                    @component('comment', ['param' => 'remark', 'fields' => $fields, 'id' => $remark->id])
                        @slot('url')
                            {{ $remark->image_url }}
                        @endslot
                        @slot('name')
                            {{ $remark->name }}
                        @endslot
                        @slot('date')
                            {{ $remark->created_at }}
                        @endslot
                        @slot('content')
                            {{ $remark->content }}
                        @endslot
                    @endcomponent
                    
                    
               
                @endforeach
               
               {{ $myRemarks->links() }}
           </ul>
           <div class="filler"></div>
        </div>
    </div>

    
@endsection