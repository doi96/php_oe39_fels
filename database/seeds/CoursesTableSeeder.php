<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
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

        for ($i=0; $i < $limit; $i++) {
            DB::table('courses')->insert([
                'name'=>$faker->name(),
                'image'=>$faker->image(),
                'description'=>$faker->text(50),
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]);
        }
    }
}
