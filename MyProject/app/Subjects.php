<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public function subject(){
    	return $this->belongsToMany(Courses::class);
    }
}
