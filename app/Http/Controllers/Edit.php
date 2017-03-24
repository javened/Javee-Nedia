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
class Edit extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function editgrade($cid,$id){
        $student = Students::find($id);
        $grades = Students::find($id)->subject;
        $subject = Courses::find($cid)->subjects;
        $course = Courses::orderBy('id')->get();
        return view('Edit.Edit-Grade',['student'=>$student, 'subject'=>$subject,'grades'=>$grades,'cid'=>$cid,'course'=>$course]);
    }
    public function editstudent($id){
        $student = Students::find($id);
        $studentcourse = Courses::find($student->courses_id);
        $course = Courses::orderBy('id')->get();
        return view('Edit.Edit-Student',['student'=>$student,'course'=>$course,'studentcourse'=>$studentcourse]);
    }
    public function editSubject($id){
        $subject = Subjects::find($id);
        return view('Edit.Edit-Subject',['subject'=>$subject]);
    }
    public function editCourse($id){
        $course = Courses::find($id);
        return view('Edit.Edit-Course',['course'=>$course]);
    }
}
