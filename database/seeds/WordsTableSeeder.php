<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $idCourse = count(DB::table('courses')->select('id')->get());
        $limit = 5;
        for($i=0; $i < $limit; $i++) {
            DB::table('words')->insert([
                'text'=>$faker->word(),
                'course_id'=>random_int(1,$idCourse),
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]);
        }  
    }
}
