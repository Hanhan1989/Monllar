<?php

namespace App\Http\Controllers\Frontal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{

    public function listar($id_categoria)
    {
        return view('frontal.lista_productos', compact('id_categoria'));
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
