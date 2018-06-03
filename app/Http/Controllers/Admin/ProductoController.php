<?php

namespace App\Http\Controllers\Admin;


use App\Model\Atributo;
use App\Model\AtributoProducto;
use App\Model\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catalogo;
use App\Model\Producto;
use App\Model\AtributoValor;
use Illuminate\Support\Facades\DB;

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
        $atributos = [];
        $catalogoCategorias = Catalogo::with('categorias')->get();
        $atributos = Atributo::all();
        $data['catalogo_categorias'] = $catalogoCategorias;
        return view('admin.productoCreate', compact('data', 'atributos'));
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
            'path_imagen_1' => 'required|image',
            'path_imagen_2' => 'required|image',
            'path_imagen_3' => 'required|image',
            'codigo_barras' => 'required',
            'sku' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'descripcion' => 'required',
            'informacion_adicional' => 'required',
        ]);

        // Guardar las imagenes en public/media/images
        if (Input::hasFile('path_imagen_1')) {
            $file1 = Input::file('path_imagen_1');
            $fileName1 = microtime() . $file1->getClientOriginalName();
            $fileName1 = str_replace(' ', '-', $fileName1);
            $file1->move('media/images', $fileName1);
        }

        if (Input::hasFile('path_imagen_2')) {
            $file2 = Input::file('path_imagen_2');
            $fileName2 = microtime() . $file2->getClientOriginalName();
            $fileName2 = str_replace(' ', '-', $fileName2);
            $file2->move('media/images', $fileName2);
        }

        if (Input::hasFile('path_imagen_3')) {
            $file3 = Input::file('path_imagen_3');
            $fileName3 = microtime() . $file3->getClientOriginalName();
            $fileName3 = str_replace(' ', '-', $fileName3);
            $file3->move('media/images', $fileName3);
        }

        // quitar los espacios al nombre del producto
        $slug = str_replace(' ', '-', $request->nombre);

        $producto = new Producto;
        $producto->id_categoria = $request->id_categoria;
        $producto->nombre = $request->nombre;
        $producto->slug = $slug;
        $producto->path_imagen_1 = $fileName1;
        $producto->path_imagen_2 = $fileName2;
        $producto->path_imagen_3 = $fileName3;
        $producto->codigo_barras = $request->codigo_barras;
        $producto->sku = $request->sku;
        $producto->descripcion = $request->descripcion;
        $producto->informacion_adicional = $request->informacion_adicional;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();

        $last_id_producto = $producto->id;
        foreach ($request->atributo as $valor) {
            $atributoProducto = new AtributoProducto;
            $atributoProducto->id_producto = $last_id_producto;
            $atributoProducto->id_atributo = $valor;
            $atributoProducto->save();
        }

        return redirect()->route('producto.index')
            ->with('success', 'Producto guardado correctamente');
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
        // datos generales
        $data = [];
        $data['catalogo_categorias'] = Catalogo::with('categorias')->get();
        $data['atributos'] = Atributo::all();

        // datos del producto actual
        $data['producto_actual'] = Producto::find($id);
        $data['categoria_actual'] = Categoria::where('id', $data['producto_actual']->id_categoria)->first();
        $atributos_actuales = AtributoProducto::where('id_producto', $id)->get();
        $array_atributos = [];
        foreach ($atributos_actuales as $atributo_actual){
            $array_atributos[] = $atributo_actual->id_atributo;
        }

        return view('admin.productoEdit', compact('data', 'array_atributos'));
    }

    /**
     *
     */
    public function uploadFile($request, $image_name)
    {
        if ($request->hasFile($image_name)) {

            $image = $request->file($image_name);
            $name = microtime().'.'.$image->getClientOriginalExtension();
            $fileName1 = str_replace(' ', '-', $name);
            $destinationPath = public_path('media/images');
            $image->move($destinationPath, $fileName1);

            return $fileName1;
        }
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

        request()->validate([
            'nombre' => 'required',
            'codigo_barras' => 'required',
            'sku' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'descripcion' => 'required',
            'informacion_adicional' => 'required',
        ]);


        // Guardar las imagenes en public/media/images

        $fileName1 = $this->uploadFile($request, 'path_imagen_1');
        $fileName2 = $this->uploadFile($request, 'path_imagen_2');
        $fileName3 = $this->uploadFile($request, 'path_imagen_3');

        $slug = str_replace(' ', '-', $request->nombre);

        $producto = Producto::find($id);

        $producto->id_categoria = $request->id_categoria;
        $producto->nombre=$request->nombre;
        $producto->slug = $slug;
        if($fileName1){
            $producto->path_imagen_1 = $fileName1;
        }
        if($fileName2){
            $producto->path_imagen_2 = $fileName2;
        }
        if($fileName3){
            $producto->path_imagen_3 = $fileName3;
        }

        $producto->codigo_barras = $request->codigo_barras;
        $producto->sku = $request->sku;
        $producto->descripcion = $request->descripcion;
        $producto->informacion_adicional = $request->informacion_adicional;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();


        AtributoProducto::where('id_producto', $id)->delete();
        if(!empty($request->atributo)) {
            foreach ($request->atributo as $valor) {
                $atributoProducto = new AtributoProducto;
                $atributoProducto->id_producto = $id;
                $atributoProducto->id_atributo = $valor;
                $atributoProducto->save();
            }
        }

        return redirect()->route('producto.index')
            ->with('success', 'Producto actualizado correctamente');

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
