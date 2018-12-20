<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder
{
    private $faker;
    /**
     * Run the database seeds.
     * crear 20 productos de 16 categorías
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for($i = 1; $i <= 16; $i++){
            $this->crearProducto($i);
        }
    }

    /**
     * Crear 20 productos
     */
    public function crearProducto($idCategoria)
    {
        for($i = 0; $i < 20; $i++){
            DB::table('productos')->insert([
                'id_categoria' => $idCategoria,
                'nombre' => 'Lorem ipsum lorem',
                'slug' => 'lorem-ipsum-lorem',
                'descripcion' => $this->faker->text,
                'informacion_adicional' => $this->faker->text,
                'precio' => $this->faker->randomFloat(2, 0, 2),
                'stock' => '100',
                'path_imagen_1' => 'default.jpg',
                'path_imagen_2' => 'default.jpg',
                'path_imagen_3' => 'default.jpg',
                'codigo_barras' => $this->faker->unique()->numberBetween($min = 0, $max = 2147483647),
                'sku'=> $this->faker->unique()->numberBetween($min = 0, $max = 9999),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);   
        }
    }
}
