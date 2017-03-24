<?php

use Illuminate\Database\Seeder;
use App\Courses_subjects;
use App\Admin;
class allNeeded extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('courses')->insert([
        //     ['course_name' => 'Bachelor of Information System (1st year)'],
        //     ['course_name' => 'Bachelor of Information System (2st year)']
        // ]);
        // DB::table('subjects')->insert([
        //     ['subject_name' => 'Physical Education 1'],
        //     ['subject_name' => 'Physical Education 2'],
        //     ['subject_name' => 'Physical Education 3'],
        //     ['subject_name' => 'Physical Education 4'],
        //     ['subject_name' => 'Christian Living 1'],
        //     ['subject_name' => 'Christian Living 2'],
        //     ['subject_name' => 'Bible Science 1'],
        //     ['subject_name' => 'Bible Science 2']
        // ]);
        // DB::table('courses_subjects')->insert([
        //     ['courses_id' => 1, 'subjects_id' => 1],
        //     ['courses_id' => 1, 'subjects_id' => 2]
        // ]);
        Courses_subjects::insert([
            'courses_id'=>1,'subjects_id'=>1
        ]);
        Courses_subjects::insert([
            'courses_id'=>1,'subjects_id'=>2
        ]);
        Courses_subjects::insert([
            'courses_id'=>2,'subjects_id'=>3
        ]);
        Courses_subjects::insert([
            'courses_id'=>2,'subjects_id'=>4
        ]);
        Courses_subjects::insert([
            'courses_id'=>1,'subjects_id'=>5
        ]);
        Courses_subjects::insert([
            'courses_id'=>1,'subjects_id'=>6
        ]);
        Courses_subjects::insert([
            'courses_id'=>2,'subjects_id'=>7
        ]);
        Courses_subjects::insert([
            'courses_id'=>2,'subjects_id'=>8
        ]);
        // Admin::insert(['name'=>'Javee','email'=>'javeenedia@gmail.com','password'=>Hash::make('password')]);
    }
}
