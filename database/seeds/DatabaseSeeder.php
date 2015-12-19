<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(DegreesTableSeeder::class);
        $this->call(RequirementsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CourseRequirementTableSeeder::class);
        $this->call(DegreeRequirementTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
