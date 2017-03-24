<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function student()
    {
        return $this->hasMany(Students::class);
    }
    // public function subject()
    // {
    //     return $this->hasMany(SubjectCourses::class);
    // }
    public function subjects(){
    	return $this->belongsToMany(Subjects::class);
    }
    public function cs(){
        return $this->hasMany(Courses_subjects::class);
    }
}
