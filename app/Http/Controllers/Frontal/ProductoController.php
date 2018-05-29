<?php

namespace App\Http\Controllers\Frontal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Producto;
use App\Model\Atributo;
use Illuminate\Support\Facades\DB;


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
    public function show($id)
    {
        $atributos = DB::select('SELECT * FROM atributo_productos 
		INNER JOIN atributos ON atributo_productos.id_atributo = atributos.id
		INNER JOIN atributo_valors ON atributo_valors.id_atributo = atributos.id
		WHERE atributo_productos.id_producto = ?', [$id]);
        $producto = Producto::where('id', $id)->first();
        return view('frontal.ficha_producto', compact('producto', 'atributos'));
    }

    public function showProductoJson($q)
    {
        $productos = DB::table('productos')
            ->where('nombre', 'LIKE', '%'.$q.'%')
            ->limit(5)
            ->get();

        return response()->json($productos);
    }

}
