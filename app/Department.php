<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable = ['firstname', 'middlename', 'lastname',
		'gender', 'birthday', 'address', 'aboutme', 'deptid'];
    //
    public function Person(){
    	return $this->hasMany('App\Person');
    }
}
