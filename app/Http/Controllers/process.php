<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateStudentRequest;
use App\Students;
use App\Courses;
use App\Courses_subjects;
use App\Subjects;
use App\studentdb;
use App\User;
use App\Grades;
use App\Http\Controllers\Controller;


class process extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $course = Courses::orderBy('id')->get();
        return view('home',['course'=>$course]);
    }
    public function course($id){
        $courses = Courses::orderBy('id')->get();
        $subjects = Courses::find($id)->subjects;
        $students = Courses::find($id)->student;
        return view('User.Show-CourseList',['courses'=>$courses,'subjects'=>$subjects,'students'=>$students]);
    }
    public function grade($id){
        $courses = Courses::orderBy('id')->get();
        $student = Students::find($id);
        $grades = Students::find($id)->subject;
        $subjects = Courses::find($student->courses_id)->subjects;
        return view('User.Show-Grade',['courses'=>$courses,'student'=>$student,'grades'=>$grades,'subjects'=>$subjects]);
    }
}
