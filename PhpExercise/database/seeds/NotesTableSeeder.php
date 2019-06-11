<?php

use Illuminate\Database\Seeder;
use App\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::truncate();

        $faker = \Faker\Factory::create();

        for($i=0; $i<20; $i++){
        	Note::create([
        		'title' => $faker->word,
        		'body' => $faker->paragraph,
        	]);
        }
    }
}
