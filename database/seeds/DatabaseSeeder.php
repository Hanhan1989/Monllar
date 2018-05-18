<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PerfilsTableSeeder::class,
            UsersTableSeeder::class,
            CatalogosTableSeeder::class,
            CategoriasTableSeeder::class,
            Categoria_CatalogosTableSeeder::class,
            ProductosTableSeeder::class,
            AtributosTableSeeder::class,
            Atributos_ProductosTableSeeder::class,
            AtributoValorsTableSeeder::class
        ]);
    }
}
