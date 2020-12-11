<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $lessonNumber = count(DB::table('lessons')->select('id')->get());
        $limit = 10;
        for ($i=0; $i < $limit; $i++) {
            DB::table('questions')->insert([
                'lesson_id' => random_int(1, $lessonNumber),
                'name' => $faker->word,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]);
        }
    }
}
