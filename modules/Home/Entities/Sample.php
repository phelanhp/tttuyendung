<?php

namespace PPM\Sample\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model_name extends Model
{
    use SoftDeletes;

	protected $table = 'table_name';

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
   	
}
