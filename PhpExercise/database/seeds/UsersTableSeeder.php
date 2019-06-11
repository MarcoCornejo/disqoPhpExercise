<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('password');

        User::create([
        	'email' => 'alejandroc_89@hotmail.com',
        	'password' => $password,
        ]);

        for($i=0; $i<10; $i++){
        	User::create([
        		'email' => $faker->email,
        		'password' => $password,
        	]);
        }
    }
}
