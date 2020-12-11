<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Thien Tran',
                'email'=>'thientran98qb@gmail.com',
                'password'=>bcrypt('Thien123'),
                'role_id'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
            ]
        ]);
        factory(User::class, 5)->create();
    }
}
