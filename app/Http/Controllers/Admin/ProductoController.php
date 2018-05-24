<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catalogo;
use App\Model\Producto;

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
        $productos = Producto::orderBy('id', 'desc')
            ->paginate(15);

        return view('admin.producto', compact('productos'));
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
        // validación de formulario, asegurar que se una imagen
        request()->validate([
            'nombre' => 'required',
//            'path_imagen_1'=> 'required|image',
//            'path_imagen_2'=> 'required|image',
//            'path_imagen_3'=> 'required|image',
        ]);

        // Guardar las imagenes en public/media/images
        if (Input::hasFile('path_imagen_1')) {
            $file1 = Input::file('path_imagen_1');
            $fileName1 = microtime() . $file1->getClientOriginalName();
            $fileName1= str_replace(' ','-',$fileName1);
            // echo('NOMBRE del fichero 1' . $fileName1);
            $file1->move('media/images', $fileName1);
        }

        if (Input::hasFile('path_imagen_2')) {
            $file2 = Input::file('path_imagen_2');
            $fileName2 = microtime() . $file2->getClientOriginalName();
            $fileName2= str_replace(' ','-',$fileName2);
            $file2->move('media/images', $fileName2);
        }

        if (Input::hasFile('path_imagen_3')) {
            $file3 = Input::file('path_imagen_3');
            $fileName3 = microtime() . $file3->getClientOriginalName();
            $fileName3= str_replace(' ','-',$fileName3);
            $file3->move('media/images', $fileName3);
        }

        // quitar los espacios al nombre del producto
        $nombre= str_replace(' ','-',$request->nombre);
        echo('nombre con hifen '. $nombre);


        Producto::create([
            'id_categoria' => 1,
            'nombre' => $request->nombre,
            'slug' => $nombre,
            'path_imagen_1' => $fileName1,
            'path_imagen_2' => $fileName2,
            'path_imagen_3' => $fileName3,
            'path_imagen_4' => $fileName3,
            'descripcion' => 'pantalon de prueba',
            'informacion_adicional' => 'Este pantalón es muy bonito lo usó Shakira',
            'precio' => 20,
            'stock' => 30,

        ]);

//        return redirect()->route('producto.create')
//            ->with('success', 'GUARDADO');


//        Producto::create($request->all());
//        return redirect()->route('producto.create')
//            ->with('success', 'GUARDADO');
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

        Producto::find($id)->delete();
        return redirect('/admin/producto');

    }
}
