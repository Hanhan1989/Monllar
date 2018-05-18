<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Atributos_ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $i = 320; // es el total de produtos insertados en la tabla produtos 

        while(--$i){ //el último número debe ser 1
            DB::table('atributo_productos')->insert([
                [
                    'id_producto' => $i,
                    'id_atributo' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => $i,
                    'id_atributo' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]);
        }

    }
}
