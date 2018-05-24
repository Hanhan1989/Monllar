<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catalogo;

use  Illuminate\Support\Facades\Input;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.producto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $catalogoCategorias = Catalogo::with('categorias')->get();
        $data['catalogo_categorias'] = $catalogoCategorias;

        return view('admin.productoCreate', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validación de formulario, asegurarnos que es una imagen y no
        // otro archivo
        request()->validate([
            'nombre' => 'required',
            'path_imagen_1'=> 'required|image',
            'path_imagen_2'=> 'required|image',
            'path_imagen_3'=> 'required|image',
        ]);

        // Guardar las imagenes en public/media/images
        if (Input::hasFile('path_imagen_1') || Input::hasFile('path_imagen_2') || Input::hasFile('path_imagen_3')){

            $file1 = Input::file('path_imagen_1');
            $fileName1 = microtime().$file1->getClientOriginalName();
            $file1->move('media/images', $fileName1);


            $file2 = Input::file('path_imagen_2');
            $fileName2 = microtime().$file2->getClientOriginalName();
            $file2->move('media/images', $fileName2);


            $file3 = Input::file('path_imagen_3');
            $fileName3 = microtime().$file3->getClientOriginalName();
            $file3->move('media/images', $fileName3);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
