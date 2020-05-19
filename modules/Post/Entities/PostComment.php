<?php

namespace PPM\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\User\Entities\User;

class PostComment extends Model
{
	protected $table = 'post_comments';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = true;

    public function post(){
        return $this->belongsTo(Post::class,'post_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
