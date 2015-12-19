<?php

use Illuminate\Database\Seeder;

class DegreeRequirementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 1,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 2,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 3,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 4,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 5,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 6,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 7,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 8,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 9,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 10,
        ]);
        DB::table('degree_requirement')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => 1,
            'requirement_id' => 11,
        ]);


    }
}
