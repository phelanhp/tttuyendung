<?php

namespace PPM\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use SoftDeletes;

	protected $table = 'post_categories';

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

    public function posts(){
        return $this->hasMany(Post::class,'category_id','id');
    }

}
