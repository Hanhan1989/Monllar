<?php

namespace App\Http\Controllers\Admin;

use App\Model\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catalogo;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogos = $catalogoCategorias = Catalogo::with('categorias')->get();
        return view('admin.categoria', compact('catalogos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogos=Catalogo::all();

        return view('admin.categoriaCreate',compact('catalogos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Categoria::create($request->all());

        return redirect('/admin/categoria')->with('success','GREAT!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        $categoria_id = $categoria->id;
        $catalogos=Catalogo::all();
        return view('admin.categoriaCreate', compact('categoria','categoria_id','catalogos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->id_catalogo=$request->id_catalogo;
        $categoria->save();
        return redirect('/admin/categoria')->with('success','GREAT!!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::find($id)->delete();
        return redirect('/admin/categoria');
    }
}
