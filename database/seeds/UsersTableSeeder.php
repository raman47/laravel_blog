<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table
        DB::table('users')->truncate();

        DB::table('users')->insert([
        [
            'name' => "john doe",
            'email' => "johndoe@test.com",
            'password' => bcrypt('secret')
        ],
        [
            'name' => "Jane doe",
            'email' => "janedoe@test.com",
            'password' => bcrypt('secret')
        ],
        [
            'name' => "ed doe",
            'email' => "eddoe@test.com",
            'password' => bcrypt('secret')
        ],
    
        ]);
    }
}
