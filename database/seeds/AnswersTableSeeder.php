<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 5;
        $questionNumber = count(DB::table('questions')->select('id')->get());

        for ($i=0; $i < $limit; $i++) {
            DB::table('answers')->insert([
                'question_id' => random_int(1, $questionNumber),
                'name' => $faker->word,
                'is_correct' => $faker->randomElement([false, true]),
            ]);
        }
    }
}
