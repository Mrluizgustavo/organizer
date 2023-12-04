<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('index');
    }

    /** 
     * Vai até a página 'criar'
     */
    public function Mostrar_Criar(){
        return View('Criar');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function Cadastrar_Tarefa(Request $request)
    {
        $Dados_trf = $request->validate([
            'nm_tarefa' => 'string|required',
            'conteudo_tarefa' => 'string|required',
            'cor' => 'string|required',
            'n_Checklists' => 'numeric|required'
        ]);

        Tarefa::create($Dados_trf);

        return redirect::route('Criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
