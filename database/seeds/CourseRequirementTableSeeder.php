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
            'DGMD E-42 Making the Short Film: Innovations and Practices for the Digital Age' => ['On Campus','Upper Level Courses'],
            'EXPO E-25 Academic Writing and Critical Reading' => ['Harvard Instructor','Expo-25'],

        ];


        foreach($courses as $course_name => $requirements) {

            # First get the course
            $course = \App\Course::where('course_name','like',$course_name)->first();

            # Now loop through each tag for this book, adding the pivot
            foreach($requirements as $requirement_name) {

                $requirement = \App\Requirement::where('requirement_name','LIKE',$requirement_name)->first();

                # Connect this req to this course
                $course->requirements()->save($requirement);
            }

        }

    }
}
