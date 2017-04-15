<?php

use Illuminate\Database\Seeder;

class listenerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function getRandomImage(){
        $image = rand(1,161);
        $append = '';
        switch (mb_strlen($image)){
            case 1:
                $append = '000';
                break;
            case 2:
                $append = '00';
                break;
            case 3:
                $append = '0';
                break;
        }
        return '/Resources/face/' . $append . $image . '.png';
    }
    
    public function run()
    {
        //DB::table('image')->insert(['url' => 'Resources/astroavatar.png', 'erased' => 'false']);
        /*DB::table('listener')->insert(
            ['name' => 'Edgar',
             'email' => 'a@a.a',
             'password' => '1',
             'birthday' => '1997-03-30',
             'gender' => '1',
             'erased' => '0']);*/
        for($i = 0; $i < 50; $i++){
            
            $listener = new App\Listener;
            $listener->name = 'Edgar' . $i;
            $listener->image_url = $this->getRandomImage();
            $listener->email = 'a@a.a' . $i;
            $listener->password = '1';
            $listener->birthday = '1997-03-30';
            $listener->gender = '1';
            $listener->save();
            
            $song = new App\Music;
            $song->listener_id = $listener->id;
            $song->image_url = $this->getRandomImage();
            $song->name = "Musica " . $i . ',0';
            $song->author = "Autor " . $i;
            $song->url = '/Resources/seed/' . rand(1,148) . '.mp3';
            $song->minutes = '3';
            $song->seconds = '0';
            $song->save();
            
            $song2 = new App\Music;
            $song2->listener_id = $listener->id;
            $song2->image_url = $this->getRandomImage();
            $song2->name = "Musica " . $i . ',1';
            $song2->author = "Autor " . $i;
            $song2->url = '/Resources/seed/' . rand(1,148) . '.mp3';
            $song2->minutes = '3';
            $song2->seconds = '0';
            $song2->save();
            
            $playlist = new App\Playlist;
            $playlist->name = "Lista de reproduccion " . $i;
            $playlist->listener_id = $listener->id;
            $playlist->save();
            
            $playlistHasMusic = new App\PlaylistHasMusic;
            $playlistHasMusic->playlist_id = $playlist->id;
            $playlistHasMusic->music_id = $song->id;
            $playlistHasMusic->save();
            
            $playlistHasMusic2 = new App\PlaylistHasMusic;
            $playlistHasMusic2->playlist_id = $playlist->id;
            $playlistHasMusic2->music_id = $song2->id;
            $playlistHasMusic2->save();
            
            $remark = new App\Remark;
            $remark->listener_id = App\Listener::find(rand(1,$i+1))->id;
            $remark->content = "Lorem ipsum " .$i;
            $remark->save();
            
            $musicHasRemark = new App\MusicHasRemark;
            $musicHasRemark->remark_id = $remark->id;
            $musicHasRemark->music_id = $song->id;
            $musicHasRemark->save();
            
            $listenerFollowListener = new App\ListenerFollowListener;
            $listenerFollowListener->follower_id = $listener->id;
            $listenerFollowListener->followed_id = $listener->id;
            $listenerFollowListener->save();
            
            if($i%2 == 0 and $i!=0){
                $listenerFollowListener2 = new App\ListenerFollowListener;
                $listenerFollowListener2->follower_id = $listener->id;
                $listenerFollowListener2->followed_id = $listener->id - 1;
                $listenerFollowListener2->save();
            }
            
        }
        
        
        
    }
}
