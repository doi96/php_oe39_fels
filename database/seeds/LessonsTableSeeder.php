<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
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
        $idCourse = count(DB::table('courses')->select('id')->get());
        for($i=0; $i < $limit; $i++) {
            DB::table('lessons')->insert([
                'name'=>$faker->word(),
                'course_id'=>random_int(1,$idCourse),
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]);
        }  
    }
}
