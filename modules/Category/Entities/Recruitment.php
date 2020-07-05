<?php

namespace PPM\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\Post\Entities\Post;
use PPM\User\Entities\User;

class Recruitment extends Model{

    use SoftDeletes;

    protected $table = 'recruitments';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = TRUE;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->BelongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(){
        return $this->BelongsTo(Post::class, 'post_id');
    }

}
