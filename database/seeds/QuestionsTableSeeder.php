<?php

use App\Models\Lesson;
use App\Models\Word;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

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
        $limit = 100;
        for ($i=0; $i < $limit; $i++) {
            $id = DB::table('questions')->insertGetId([
                'lesson_id' => $faker->randomElement(Lesson::pluck('id')->toArray()),
                'name' => $faker->sentence(20),
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]);

            $correct = rand(0,3);
            for($j=0; $j < 4; $j++) {
                DB::table('answers')->insert([
                    'question_id' => $id,
                    'name'=>'',
                    'word_id' => $faker->randomElement(Word::pluck('id')->toArray()),
                    'is_correct' => ($correct == $j),
                ]);
            }
        }
    }
}
