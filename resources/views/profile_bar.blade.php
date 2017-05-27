<?php

$amISubed = false;
$userFollows = DB::select('call mySubs(?)',array(session('user')->id));
foreach ($userFollows as $sub){
    if((string)$sub->followed_id === (string)$id){
        $amISubed = true;
    }
}
?>
<div class="profilehead">
    <div class="headerphoto" style="background-image:url({{ $image_profile_url }})">
        @if((string)$id !== (string)session('user')->id)
            @if($amISubed)
                <form id="unfollowThisUser" action="{{ route( 'subs' . '.destroy', $id) }}" method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <!--<input type="hidden" name="followed_id" value="{{ $id }}" />-->
                    <div class="subbutton" style="float:right" type="submit" onclick="document.getElementById('unfollowThisUser').submit()">
                        <label class="seguir">Seguir</label><span class="glyphicon glyphicon-minus plus"></span>
                    </div>
                </form>
            @else
                <form id="followThisUser" action="/subs" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="followed_id" value="{{ $id }}" />
                    <div class="subbutton" style="float:right" type="submit" onclick="document.getElementById('followThisUser').submit()">
                        <label class="seguir">Seguir</label><span class="glyphicon glyphicon-plus plus"></span>
                    </div>
                </form>
            @endif
            
        @endif
    </div>
    <div class="profilepic"></div>
</div>
<div class="profileinfo">
    <label class="profilename">{{ $name }}</label>
</div>