<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'CSCI E-15 Dynamic Web Applications',
            'crn' => '14291',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'EXPO E-25 Academic Writing and Critical Reading',
            'crn' => '12345',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'DGMD E-42 Making the Short Film: Innovations and Practices for the Digital Age',
            'crn' => '23456',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'PHIL S-140 Deductive Logic',
            'crn' => '34567',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'CSCI E-3: Introduction to Web Programming Using JavaScript',
            'crn' => '24095',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'CSCI E-7: Introduction to Programming with Python',
            'crn' => '24555',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'CSCI E-8: Web GIS: Technologies and Applications',
            'crn' => '24031',
            'course_hours' => '4',
        ]);
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'course_name' => 'CSCI E-10A: Introduction to Computer Science Using Java I',
            'crn' => '14289',
            'course_hours' => '4',
        ]);


    }
}
