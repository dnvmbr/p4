<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degree_id = \App\Degree::where('degree_name','=','Computer Science')->pluck('id');
        DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'student_name' => 'John Harvard',
            'student_email' => 'john@harvard.edu',
            'degree_id' => $degree_id,
        ]);
    }
}
