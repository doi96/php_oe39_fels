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
        $limit = 100;
        $imageSeed = $faker->word();
        for($i=0; $i < $limit; $i++) {
            DB::table('words')->insert([
                'text'=>$faker->word(),
                'course_id'=>random_int(1,$idCourse),
                'definition' => $faker->sentence(),
                'image_url' => "https://picsum.photos/seed/$imageSeed/300/300",
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]);
        }  
    }
}
