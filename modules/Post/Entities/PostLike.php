<?php

namespace PPM\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostLike extends Model
{
	protected $table = 'post_likes';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = true;

    /* get ID*/
    public function getId(){
    	return $this->id;
    }
    public function getTitle(){
        return $this->name;
    }

    public function post(){
        return $this->belongsTo(Post::class,'post_id','id');
    }
}
