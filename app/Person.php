<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	protected $fillable = ['deptabbv', 'deptname'];
    //
    public function Department() {
    	return $this->belongsTo('App\Department', 'deptid');
    }
}
