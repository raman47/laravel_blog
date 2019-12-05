<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

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
       // DB::table('users')->truncate();

        $faker = Factory::create();

        DB::table('users')->insert([
        [
            'name' => "john doe",
            'slug' => 'john-doe',
            'email' => "johndoe@test.com",
            'password' => bcrypt('secret'),
            'bio' => $faker->text(rand(250, 300))
        ],
        [
            'name' => "Jane doe",
            'slug' => 'jane-doe',
            'email' => "janedoe@test.com",
            'password' => bcrypt('secret'),
            'bio' => $faker->text(rand(250, 300))
        ],
        [
            'name' => "ed doe",
            'slug' => 'ed-doe',
            'email' => "eddoe@test.com",
            'password' => bcrypt('secret'),
            'bio' => $faker->text(rand(250, 300))
        ],

        ]);
    }
}
