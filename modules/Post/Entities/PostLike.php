<?php

namespace PPM\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use PPM\User\Entities\User;

class PostLike extends Model{

    protected $table = 'post_likes';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = TRUE;

    /* get ID*/
    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->name;
    }

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
