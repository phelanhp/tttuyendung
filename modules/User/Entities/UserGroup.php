<?php

namespace PPM\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserGroup extends Model{

    use SoftDeletes;

    protected $table = 'user_groups';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = TRUE;

    /* get ID*/
    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->name;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public static function getGroupId($key){
        $data = self::where('key', $key)->first();

        return $data->id;
    }

}
