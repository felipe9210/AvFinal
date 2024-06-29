<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
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
    public function create()
    {
        return view('layouts.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request);
       // $request->all();
        Cliente::create(['nome'=>$request->nome, 'modelo'=>$request->modelo, 'marca'=>$request->marca]);
      return 'Cadastro concluido com sucesso';
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente= cliente::findOrfail($id);
        return view('layouts.show', ['cliente'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= cliente::findOrfail($id);
        return view('layouts.editar', ['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente= cliente::findOrfail($id);
        Cliente::update(['nome'=>$request->nome, 'modelo'=>$request->modelo, 'marca'=>$request->marca]);
        return "Cliente atualizado";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $id)
    {
        $cliente->delete();
        return 'cliente deletado';
    }
    public function delete(Cliente $id)
    {
        $cliente= Cliente::findOrFail($id);
        return view('layouts.deletar',['cliente'=>$cliente]);
    }
}
