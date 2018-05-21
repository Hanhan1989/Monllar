<?php

namespace App\Http\Controllers\Frontal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Producto;

class PortadaController extends Controller
{
    public function portada()
    {
        $productos = Producto::inRandomOrder()->limit(8)->get();
        return view('frontal/portada', compact('productos'));
    }
}
