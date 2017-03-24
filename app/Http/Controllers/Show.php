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
class Show extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function showAddStudent(Request $request,$id){
        $course = Courses::find($id);
        return view('Add.Add-Student',['course'=>$course]);
    }
    public function showGrades ($cid,$id){
        // echo $student;
        $course = Courses::orderBy('id')->get();
        $student = Students::find($id);
        $subject = Courses::find($cid)->subjects;
        $grades = Students::find($id)->subject;
        return view('Show.Student-Grade',['student'=>$student, 'subject'=>$subject,'grades'=>$grades,'cid'=>$cid,'course'=>$course]);
    }
    public function showcourse(Request $request,$id){
        $unique = Courses::find($id)->student;
        $subject = Courses::find($id)->subjects;
        $cs = Courses::find($id)->cs;
        $course = Courses::find($id);
        $courses = Courses::orderBy('id')->get();
        return view('Show.Course',['unique'=>$unique,'id'=>$id,'course'=>$course,'courses'=>$courses,'subject'=>$subject,'cs'=>$cs]);
    }
    public function showAddStudentSuccessful(){
        $student = Students::orderBy('id')->get();
        $count = count($student);
        $course = Courses::find($student[$count - 1]->courses_id);
        $courseList = Courses::orderBy('id')->get();
        return view('Show.add-successful',['student'=>$student[$count - 1],'course'=>$course,'courseList'=>$courseList]);
    }
    public function showAddSubject(){
        return view('Add.Add-Subject');
    }
    public function showAddCourse(){
        return view('Add.Add-Course');
    }
    public function showAddCourseSubject($id){
        $subjects = Subjects::orderBy('id')->get();
        $courses_subjects = Courses::find($id)->subjects;
        return view ('Add.Add-CoursesSubjects',['subjects'=>$subjects,'course'=>$id,'cs'=>$courses_subjects]);
    }
}
