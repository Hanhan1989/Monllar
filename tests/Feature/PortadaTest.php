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
    public function getResponse(): object
    {
        return $this->get('/');
    }

    public function getProductos():object
    {
        return $this->getResponse()->original->getData()['productos'];
    }

    /**
     * Testea que la cabecera devuelva 200. Es decir que la portada sea accesible
     *
     * @return void
     */
    public function testAccederPortada(): void
    {
        $this->getResponse()->assertStatus(200); 
    }

    /**
     * Testea que se saquen 8 productos en la portada
     */
    public function testSacar8productosEnPortada(): void
    {
        $productos = $this->getProductos();
        
        $this->assertEquals(count($productos), 8);
    }

    /**
     * Testea que el stock no sea negativo
     */
    public function testStockNoDebeSerNegativo():void
    {
        $productos = $this->getProductos();
        $producto = $productos[0];
        for($i = 1;  $producto->stock > 0 && $i < count($productos); $i++){
            $producto = $productos[$i];
        }
        $esPositivo = $i >= count($productos) ? true : false;

        $this->assertEquals($esPositivo, true);
    }
}
