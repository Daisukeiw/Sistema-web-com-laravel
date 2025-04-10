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

    return redirect('/consultar-cliente')-> with('success', 'Cliente cadastrado com sucesso!');
});

Route::get('/consultar-cliente', function(){
    //dd(Cliente::find($id)); //debug and die
    $cliente = Cliente::all();
    return view('consulta', ['clientes' => $cliente]);
});


Route::get('/editar-cliente/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $cliente = Cliente::find($id);
    if (!$cliente) {
        return redirect('/editar-cliente')->with('error', 'Cliente não encontrado.');
    }
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

    return redirect('/consultar-cliente')->with('success', 'Cliente atualizado com sucesso!');
});

Route::get('/excluir-cliente/{id}', function($id){
    //dd($request->all());
    $cliente = Cliente::find($id);
    if (!$cliente) {
        return redirect('/consultar-cliente')->with('error', 'Cliente não encontrado.');
    }
    $cliente->delete();
    return redirect('/consultar-cliente')->with('success', 'Cliente deletado com sucesso!');
});
