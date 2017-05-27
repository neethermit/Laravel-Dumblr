<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListenerFollowListener extends Model
{
    protected $table="listener_follow_listener";
    protected $primaryKey = ['follower_id', 'followed_id'];
    public $incrementing = false;
    
    
    protected function setKeysForSaveQuery(\Illuminate\Database\Eloquent\Builder $query) {
        if (is_array($this->primaryKey)) {
            foreach ($this->primaryKey as $pk) {
                $query->where($pk, '=', $this->original[$pk]);
            }
            return $query;
        }else{
            return parent::setKeysForSaveQuery($query);
        }
    }

    
    
}
