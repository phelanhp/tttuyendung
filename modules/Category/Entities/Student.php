<?php

namespace PPM\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\Category\Entities\Major;

class Student extends Model
{
    use SoftDeletes;

	protected $table = 'students';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = true;

    public function major()
    {
    	return $this->belongsTo(Major::class, 'major_id');
    }

}
