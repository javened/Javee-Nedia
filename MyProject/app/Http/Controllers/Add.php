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
class Add extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function addstudent(CreateStudentRequest $request)
    {
        $student = new Students;
        $student->studentname = $request->studentname;       
        $student->id = $request->id;
        $student->courses_id = $request->courses_id;
        $student->save();
        $subject = Courses::find($request->courses_id)->subjects;
        foreach($subject as $subjects){
            $grade = new Grades;
            $grade->students_id = $request->id;
            $grade->subjects_code = $subjects->id;
            $grade->grade = 0;
            $grade->save();
        }
        \Session::flash('flash_message','A new student is added!');
        return redirect('/Show/Add-Student-Successful');
    }
    public function addsubject(Request $request){
        $this->validate(request(),[
            'subject_name'=>'required|unique:Subjects'
            ]);
        $subject = new Subjects;
        $subject->subject_name = $request->subject_name;
        $subject->save();
        \Session::flash('flash_message','A new subject is added!');
        return redirect('/admin');
    }
    public function addcourse(Request $request){
        $this->validate(request(),[
            'course_name'=>'required|unique:Courses'
            ]);
        $course = new Courses;
        $course->course_name = $request->course_name;
        $course->save();
        $course = Courses::orderBy('id')->get();
        $count = count($course);
        \Session::flash('flash_message','A new course is added!');
        return redirect('/Show/Add-Subject/'.$course[$count - 1]->id);
    }
    public function addcourse_subject(Request $request,$id){
        $courses_subjects = Courses::find($id)->cs;
        $students = Courses::find($id)->student;
        $count = 0;
        if (count($request->subjects) != 0){
            foreach ($request->subjects as $subjects) {
                        $cs = new Courses_subjects;
                        $cs->courses_id = $id;
                        $cs->subjects_id = $subjects;
                        $cs->save();
                        for($i = 0; $i < count($students); $i++){
                            $grades = new Grades;
                            $grades->students_id = $students[$i]->id;
                            echo $subjects."   ";
                            $grades->subjects_code = $subjects;
                            $grades->grade = 0;
                            $grades->save();
                        }
            }
        }
        \Session::flash('flash_message','New subjects are added!');
        return redirect('Show/Course/'.$id);
    }
}
/*
    for($i = 0;$i <10 ;$i++){
        $random
        for($a = 0;$a < $i;$a++){
            
        }
    }



*/