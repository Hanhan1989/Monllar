<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;

/**
 * Testea la página portada Home
 */
class PortadaTest extends TestCase
{
    /**
     * Devolver el contenido de la portada home
     */
    public function getResponse()
    {
        return $this->get('/');
    }

    /**
     * Testea que la cabecera devuelva 200. Es decir que la portada es accesible
     *
     * @return void
     */
    public function testAccederPortada()
    {
        $this->getResponse()->assertStatus(200); 
    }

    /**
     * Testea que el stock no sea negativo
     */
    public function testStockNoDebeSerNegativo()
    {
        $productos = $this->getResponse()->original->getData()['productos'];
        $producto = $productos[0];
        for($i = 1;  $producto->stock > 0 && $i < count($productos); $i++){
            $producto = $productos[$i];
        }
        $esPositivo = $i >= count($productos) ? true : false;

        $this->assertEquals($esPositivo, true);
    }
}
