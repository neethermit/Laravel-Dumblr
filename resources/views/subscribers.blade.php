<!-- La barra de subscripciones -->
@if(!isset($main))
<div class="subscriptions visible-md-block visible-lg-block">
    <label>Subscripciones</label>
    <hr>
    <ul class="sublist">
        <?php
            //$myFollows = \App\Classes\Utility::pagination('\dashboard', 'call mySongs(?)', array($listener->id), 5);
            $myFollows = DB::select('call mySubs(?)',array($listener_id));
        ?>
        <!-- Para cada uno de las subscripciones -->
        @foreach($myFollows as $follows)
            @component('option', ['param' => 'subs', 'fields' => null, 'resource' => 'user'])
                @slot('id')
                    {{ $follows->followed_id }}
                @endslot
                @slot('name')
                    {{ $follows->name }}
                @endslot
                @slot('image')
                    {{ $follows->image_url }}
                @endslot
            @endcomponent
        @endforeach
    </ul>
</div>
@endif

@if(isset($main))
<div class="flexdiv">
    <div class="filler"></div>
    <div class="contenedor2 listas">
        <label>Subscripciones</label>
        <hr>
        <ul class="sublist">
            <?php $myFollows = DB::select('call mySubs(?)',array($listener_id)); ?>
                <!-- Para cada uno de las subscripciones -->
                @foreach($myFollows as $follows)
                    @component('option', ['param' => 'subs', 'fields' => null, 'resource' => 'user'])
                        @slot('id')
                            {{ $follows->followed_id }}
                        @endslot
                        @slot('name')
                            {{ $follows->name }}
                        @endslot
                        @slot('image')
                            {{ $follows->image_url }}
                        @endslot
                    @endcomponent
                @endforeach
            <!--<li class="subelement">
                <div class="subscribedto">
                    <div class="subfotodiv"><span class="subfoto" style="background-image:url({{ asset('/Resources/shy.jpg') }});"></span>
                    </div>
                    <div class="subname">
                        <label>Edgar</label>
                    </div>
                </div>
            </li>-->
        </ul>
    </div>
    <div class="filler"></div>
</div>
@endif