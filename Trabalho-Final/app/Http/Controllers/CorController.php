<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use Illuminate\Http\Request;


function destroy($id)
{

}

class CorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cores = Cor::all();
        return view('cores.index', compact('cores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $nomeCor = $request->input('nome');
     $cor = new Cor();
     $cor->cores_nome = $nomeCor;
     $cor->save();
     return redirect('/cor');
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
    public function edit(Cor $id)
    {
        return view('cores.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cor $id, Request $request)
    {
        //para testar
        echo "retorno url: $request->nome /////////////////";
        echo "valor do banco:$id";


        $cores_nome = $request->nome;
        $id = $cores_nome;
        $id->save();
        return redirect('/cor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_cores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Cor::destroy($request->id);
        return redirect('/cor');
    }
}
