<?php

namespace PPM\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PPM\Category\Entities\Recruiter;

class RecruiterCategory extends Model
{
    use SoftDeletes;

	protected $table = 'recruiter_categories';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = true;

    public function recruiters(){
    	return $this->hasMany(Recruiter::class,'category_id');
    }

}
