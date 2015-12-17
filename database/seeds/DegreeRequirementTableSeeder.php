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
            'degree_id' => '1',
            'requirement_id' => '1',
        ]);

    }
}
