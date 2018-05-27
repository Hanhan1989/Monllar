<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AtributoValor;

class AtributoValorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_atributo = $request->get('id_atributo');
        $atributosValor = AtributoValor::where('id_atributo', $id_atributo)
            ->orderBy('id', 'asc')->get();

        $nombre_atributo = $request->get('nombre_atributo');


        return view('admin.atributoValorCreate', compact('atributosValor', 'nombre_atributo', 'id_atributo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $atributoValor = new AtributoValor();
        $atributoValor->id_atributo = $request->id_atributo;
        $atributoValor->valor = $request->valor;
        $atributoValor->save();

        $id_atributo = $request->get('id_atributo');
        $nombre_atributo = $request->get('nombre_atributo');

        return redirect('admin/atributovalor/create?id_atributo='.$id_atributo.'&nombre_atributo='.$nombre_atributo);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id_atributo = $request->get('id_atributo');
        AtributoValor::destroy($id_atributo);
        $nombre_atributo = $request->get('nombre_atributo');

        return redirect('admin/atributovalor/create?id_atributo='.$id_atributo.'&nombre_atributo='.$nombre_atributo);
    }
}
