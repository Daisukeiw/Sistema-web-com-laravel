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

Route::get('/consultar-cliente/{id}', function($id){
    //dd(Cliente::find($id)); //debug and die
    $cliente = Cliente::find($id);
    return view('consulta', ['cliente' => $cliente]);
});


Route::get('/editar-cliente/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $cliente = Cliente::find($id);
    return view('editar', ['cliente' => $cliente]);
});

Route::post('/editar-cliente/{id}', function(Request $request, $id){
    //dd($request->all());
    $cliente = Cliente::find($id);

    $cliente->update([
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

    echo "Produto editado com sucesso!";
});

Route::get('/excluir-cliente/{id}', function($id){
    //dd($request->all());
    $cliente = Cliente::find($id);
    return view('excluir', ['cliente' => $cliente]);

});

Route::post('/excluir-cliente/{id}', function(Request $request, $id){
    //dd($request->all());
    $cliente = Cliente::find($id);

    $cliente->delete([
        'id' => $id,
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

    echo "Produto excluido com sucesso!";
});