<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $guarded = [];

    public function proffessor()
    {
    	return $this->hasOne(Proffessor::class);
    }

    public function students()
    {
    	return $this->hasMany(Student::class);
    }

   
}
