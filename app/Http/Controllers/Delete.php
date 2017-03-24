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
class Delete extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function deletecs(Request $request, $id){
        $cs = Courses_subjects::find($id)->delete();
        \Session::flash('flash_message','Subject is removed from list!');
        return redirect()->back();
    }
    public function deletestudent(Request $request, $id){
        $student = Students::find($id)->delete();
        \Session::flash('flash_message','Student is deleted!');
        return redirect()->back();
    }
    public function deletecourse(Request $request, $id){
        $course = Courses::find($id)->delete();
        \Session::flash('flash_message','Course is deleted!');
        return redirect()->back();
    }
    public function deletesubject(Request $request, $id){
        $subject = Subjects::find($id)->delete();
        \Session::flash('flash_message','Subject is deleted!');
        return redirect()->back();
    }
}
