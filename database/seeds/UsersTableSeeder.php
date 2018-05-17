<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $i = 30;
        while($i--){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => bcrypt('monllar'),
                'id_perfil' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }

        $i = 50;
        while($i--){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('monllar'),
                'id_perfil' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }

        $i = 20;
        while($i--){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('monllar'),
                'id_perfil' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }

        DB::table('users')->insert([
            'name' => 'monllar',
            'email' => 'monllar@monllar.com',
            'password' => bcrypt('monllar'),
            'id_perfil' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);    

    }
}
