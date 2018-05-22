<?php

namespace App\Http\Controllers\Frontal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Producto;

class ProductoController extends Controller
{

    public function listar($id_categoria)
    {
        $producto = Producto::where('id_categoria', $id_categoria)
            ->orderBy('nombre', 'asc')
            ->paginate(10);

        return view('frontal.lista_productos', compact('producto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $producto = Producto::where('id', $id)->first();
        return view('frontal.ficha_producto', compact('producto'));
    }


}
