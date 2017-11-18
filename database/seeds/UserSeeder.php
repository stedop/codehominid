<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Stephen Dop',
            'email' => 'dopstephen@gmail.com',
            'password' => bcrypt('ReaperMan')
        ]);
    }
}
