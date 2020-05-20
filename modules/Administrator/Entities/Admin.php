<?php

namespace PPM\Administrator\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;

	protected $table = 'admins';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = true;

    public $rules = [
        'name'         => 'required',
        'username'         => 'required',
        'password'      => 'required',
    ];

    public $create_messages = [
        'name.required'         => 'Tên không được để trống!',
        'username.required'     => 'Username không được để trống!',
        'password.required'     => 'Chưa nhập mật khẩu!'
    ];

    public $edit_messages = [
        'name.required'        => 'Tên không được để trống!',
    ];

    /* get ID*/
    public function getId(){
    	return $this->id;
    }
    public function getTitle(){
        return $this->name;
    }

    public function group(){
        return $this->belongsTo(\PPM\Administrator\Entities\Admin_group::class,'group_id','id');
    }
}
