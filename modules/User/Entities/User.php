<?php

namespace PPM\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\Post\Entities\Post;

class User extends Model
{
    use SoftDeletes;

	protected $table = 'users';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = true;

    public function getId(){
    	return $this->id;
    }
    public function getName(){
        return $this->name;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(){
        return $this->hasMany(Post::class,'post_id');
    }
    public function postComments(){
        return $this->hasMany(Post::class,'post_id');
    }

}
