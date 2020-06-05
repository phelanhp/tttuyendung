<?php

namespace PPM\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\User\Entities\User;

class Post extends Model{

    use SoftDeletes;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = TRUE;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postCategory(){
        return $this->belongsTo(PostCategory::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postComments(){
        return $this->hasMany(PostComment::class, 'post_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postLikes(){
        return $this->hasMany(PostLike::class, 'post_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
