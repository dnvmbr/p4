<?php
​
use Illuminate\Database\Seeder;
​
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Jill',
          'email' => 'jill@harvard.edu',
          'password' => \Hash::make('helloworld'),
          'degree_id' => 1,
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      ]);
​
      DB::table('users')->insert([
          'name' => 'Jamal',
          'email' => 'jamal@harvard.edu',
          'password' => \Hash::make('helloworld'),
          'degree_id' => 1,
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      ]);
    }
}
