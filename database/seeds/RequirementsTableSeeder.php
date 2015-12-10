<?php

use Illuminate\Database\Seeder;

class RequirementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Area of Concentration',
            'requirement_hours' => '40',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Liberal Arts Distribution',
            'requirement_hours' => '24',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Expo-25',
            'requirement_hours' => '4',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Additional Expo',
            'requirement_hours' => '4',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Writing Intensive',
            'requirement_hours' => '12',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Quantitative Reasoning',
            'requirement_hours' => '4',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Moral Reasoning',
            'requirement_hours' => '4',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Foreign Language',
            'requirement_hours' => '8',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Harvard Instructor',
            'requirement_hours' => '52',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'Upper Level Courses',
            'requirement_hours' => '60',
        ]);

        DB::table('requirements')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'requirement_name' => 'On Campus',
            'requirement_hours' => '16',
        ]);

    }
}
