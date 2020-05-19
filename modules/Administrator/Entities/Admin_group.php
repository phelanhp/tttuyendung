<?php

namespace PPM\Administrator\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin_group extends Model
{
    use SoftDeletes;

    protected $table = 'administrator_groups';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public $create_rules = [
        'title'         => 'required',
    ];

    public $create_messages = [
        'title.required'        => 'Tên không được để trống!',
    ];




    public $edit_rules = [
        'title'         => 'required',
    ];

    public $edit_messages = [
        'title.required'        => 'Tên không được để trống!',
    ];

    /* get ID*/
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->name;
    }
    
}
