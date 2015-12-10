<?php

use Illuminate\Database\Seeder;

class CourseRequirementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses =[
            'CSCI E-15 Dynamic Web Applications' => ['Area of Concentration','Upper Level Courses'],
        ];
        $course = \App\Course::find(1);
        $requirement = \App\Requirement::find(1);
        $course->requirements()->associate($requirement->id);
        // foreach ($courses as $course_name => $course_requirements){
        //     $course = \App\Course::where('course_name','LIKE',$course_name)->first();
        //     foreach($course_requirements as $requirement_name) {
        //         $requirement = \App\Requirement::where('requirement_name','LIKE',$requirement_name)->first();
        //
        //         if(isset($course)){
        //             $course->requirements()->save($requirement);
        //         }
        //
        //     }
        // }
    }
}
