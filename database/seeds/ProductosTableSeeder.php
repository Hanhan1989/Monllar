<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '1',
                'nombre' => 'lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }

        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '2',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '3',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(4, 0, 4),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '4',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '5',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '6',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '7',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '8',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '9',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '10',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '11',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '12',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '13',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '14',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '15',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);  
              
        }


        $i = 20;
        while($i--){
            DB::table('productos')->insert([
                'id_categoria' => '16',
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $faker->text,
                'informacion_adicional' => $faker->text,
                'precio' => $faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_2' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_3' => $faker->imageUrl($width = 600, $height = 300),
                'path_imagen_4' => $faker->imageUrl($width = 600, $height = 300),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);    
        }



    }
}
