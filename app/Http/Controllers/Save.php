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
class Save extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function saveStudent(Request $request,$id){
        $this->validate(request(),[
            'studentname'=>'required'
            ]);
        $student = Students::find($id);
        $student->studentname = $request->studentname;
        $student->save();
        \Session::flash('flash_message','Student is edited!');
        return redirect('/Show/Course/'.$student->courses_id);
    }
    public function saveGrade(Request $request,$cid,$id){
        $grades = Students::find($id)->subject;
        $count = 0;
        foreach($request->grade as $g){
            $grade = Grades::find($grades[$count]->id);
            $grade->grade = $g;
            $grade->save();
            $count++;
        }
        \Session::flash('flash_message','Grades are edited!');
        return redirect('Show/Grades/'.$cid.'/'.$id);
    }
    public function saveSubject(Request $request, $id){
        $this->validate(request(),[
            'name'=>'required'
            ]);
        $subject = Subjects::find($id);
        $subject->subject_name = $request->name;
        $subject->save();
        \Session::flash('flash_message','Subject is edited!');
        return redirect('admin');
    }
    public function saveCourse(Request $request, $id){
        $this->validate(request(),[
            'name'=>'required'
            ]);
        $course = Courses::find($id);
        $course->course_name = $request->name;
        $course->save();
        \Session::flash('flash_message','Course is edited!');
        return redirect('admin');
    }
}
