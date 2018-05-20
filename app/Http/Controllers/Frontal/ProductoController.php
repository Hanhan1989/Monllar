<?php

namespace App\Http\Controllers\Frontal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Producto;

class ProductoController extends Controller
{

    public function listar($id_categoria)
    {
        $productos = Producto::where('id_categoria', $id_categoria)
            ->orderBy('nombre', 'asc')
            ->paginate(10);

        return view('frontal.lista_productos', compact('productos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('frontal.ficha_producto', compact('slug'));
    }


}
