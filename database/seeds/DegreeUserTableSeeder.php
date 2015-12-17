<?php

use Illuminate\Database\Seeder;

class DegreeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degree_user')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'degree_id' => '1',
            'user_id' => '1',
        ]);
    }
}
