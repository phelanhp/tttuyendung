<?php

namespace PPM\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\Category\Entities\Recruiter;
use PPM\Post\Entities\Post;
use PPM\Post\Entities\PostComment;
use PPM\Category\Entities\Student;
use PPM\User\Entities\UserGroup;

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

    public function group()
    {
        return $this->belongsTo(UserGroup::class,'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(){
        return $this->hasMany(Post::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(PostComment::class,'user_id','id');
    }
    public function recruiter(){
        return $this->hasOne(Recruiter::class, 'user_id');
    }
    public function student(){
        return $this->hasOne(Student::class, 'user_id');
    }

}
