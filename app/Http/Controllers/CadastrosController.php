<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadastroRequest;
use App\Http\Requests\UpdateCadastroRequest;
use App\Models\Cadastro;

class CadastrosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        $Cadastro = Cadastro::all();
        return view('cadastro.main', ['cadastro'=>$Cadastro]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCadastroRequest $request)
    {

        //Validar
        $request->validate([
            'cpf' => 'required|cpf'
        ],
        [
            'inspetoria.required' => 'Campo CPF é obrigatório',
        ]);


       Cadastro::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'endereco' => $request->Endereço,
        'nascimento' => $request->nascimento,
        'sexo' => $request->sexo,
        'estado' => $request->estado,
        'cidade' => $request->cidade,
       ]);

       return "Sucesso";
    }

    /**
     * Display the specified resource.
     */
    public function show(Cadastro $cadastro)
    {
        return json_encode(Cadastro::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cadastro $cadastro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCadastroRequest $request, Cadastro $cadastro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cadastro $cadastro)
    {
        //
    }
}
