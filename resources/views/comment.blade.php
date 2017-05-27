<li>
 <div class="commentblock">
    <div>
       <span class="commentpic" style="background-image:url({{ $url }});"></span>
    </div>
    <div class="bubble">
       <div style="display:flex">
          <label class="postedby">Publicado por: {{ $name }}</label> 
          
          <div class="filler"></div>
          <label class="postdate" >{{ $date }}</label>
  
            <label class="postdate" style="margin-left:4px;margin-right:4px;color:#000055" onclick="openEdit{{ $param }}Id{{ $id }}()">Editar</label>
       </div>
       <div style="display:inline-block;" class="commenttext"><span>
          {{ $content }}</span>
       </div>
        @component('option', ['param' => $param, 'fields' => $fields, 'stevanMode' => true])
            @slot('id')
                {{ $id }}
            @endslot
            @slot('name')
                {{ "Editar comentario" }}
            @endslot
            @slot('image')
                {{ "None" }}
            @endslot
        @endcomponent
    </div>
     
    
     
 </div>
</li>