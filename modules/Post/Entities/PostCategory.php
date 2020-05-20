<?php

namespace PPM\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model{

    use SoftDeletes;

    protected $table = 'post_categories';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = TRUE;

    public $rules = [
        'name' => 'required',
        'status' => 'required',
    ];

    public $messages = [
        'name.required' => 'Tên thể loại không được để trống',
        'status.required' => 'Vui lòng chọn trạng thái',
    ];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

}
