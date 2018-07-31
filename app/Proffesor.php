<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proffesor extends Model
{
    //
	protected $guarded = [];
    public function proffesor()
    {
    	return $this->belongsTo(Course::class);
    }
}
