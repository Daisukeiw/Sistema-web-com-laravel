<?php

use App\Models\Cliente;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-cliente', function(Request $request){
        //dd($request->all());

    Cliente::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'endereco' => $request->endereco,
        'telefone' => $request->telefone,
        'bairro' => $request->bairro,
        'cidade' => $request->cidade,
        'cep' => $request->cep,
        'complemento' => $request->complemento,
        'uf' => $request->uf,
        'observacao' => $request->observacao
    ]);

    echo "Produto criado com sucesso!";
});
