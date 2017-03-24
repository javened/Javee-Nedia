<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateStudentRequest;
use App\Students;
use App\studentdb;
use App\User;
use App\Http\Controllers\Controller;


class process extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function showform(){
    //     return view('forms');
    // }
    // public function dada(Request $request){
    //     $student = new studentdbs;
    //     $student->last_name = $request->lastname;
    //     $student->first_name = $request->firstname;
    //     $student->id_number = $request->idnumber;
    //     $student->course = $request->course;
    //     $student->address = $request->address;
    //     $student->save();
    //     return redirect('/home');
    // }
    // public function compute(Request $request){
    //     echo $request;
    //     return view('Compute',['array'=>$request]);
    // }
    // public function home(Request $request){
    //     return view('project');
    // }
    // public function showProject(Request $request){
    //     $array= $request;
    //     echo $request->size;
    //     return view('Main',['array'=>$array->size]);
    // }
    public function showRegistration(Request $request){
        return view('Register');
    }
    public function deletetable(Request $request){
        Students::findOrFail($request->id)->delete();
        return redirect('/myhome');
    }
    public function showhome(Request $request){
        $unique = Students::orderBy('id')->get();
        return view('MyHomePage',['unique'=>$unique]);
    }
    public function showedit($value){
        $unique= DB::table('Students')
            ->where('id', $value)
            ->get();
        return view('Edit',['unique'=>$unique]);

    }
    public function foredit(Request $request,$id){
        $student = Students::find($id);
        $student->last_name = $request->last_name;
        $student->first_name = $request->first_name;
        $student->middle_initial = $request->middle_initial;       
        $student->id = $request->id;
        $student->course = $request->course;
        $student->address = $request->address;
        $student->guardian = $request->guardian;
        $student->save();
        return redirect('/myhome'); 
    }

    // public function updatetable(Request $request){
    //     DB::table('users')
    //         ->where('id', 1)
    //         ->update(['votes' => 1]);
    // }


    public function addtable(CreateStudentRequest $request)
    {
        $student = new Students;
        $student->last_name = $request->last_name;
        $student->first_name = $request->first_name;
        $student->middle_initial = $request->middle_initial;       
        $student->id = $request->id;
        $student->course = $request->course;
        $student->address = $request->address;
        $student->guardian = $request->guardian;
        $student->save();
        return redirect('/myhome');
    }
}
