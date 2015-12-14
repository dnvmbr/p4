<?php

use Illuminate\Database\Seeder;

class CourseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            'Jill' => ['EXPO E-25 Academic Writing and Critical Reading', 'CSCI E-15 Dynamic Web Applications'],
            'Jamal' => ['EXPO E-25 Academic Writing and Critical Reading']
        ];

        foreach($users as $user => $courses) {
            // $user = \App\Course::where('name','like',$user_id)->first();
            foreach($courses as $course_id) {
                $course = \App\Course::where('course_name','LIKE',$course_id)->first();
                $user->courses()->attach($course);
            }
        }
    }
}
