<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->custo = $request->input('custo');
        $produto->quantidade = $request->input('quantidade');

        $produto->save();

        //Redirect
        return back()->with('success','Produto Cadastrado com Sucesso');
    }



    public function show()
    {
        $produtos = Produto::get();
        return view('produtos.list', ['produtos' => $produtos]);

    }

    public function edit( $id)
    {
        $produto = Produto::findOrFail( $id);
        return view('produtos.create', ['produto' => $produto]);
    }

    public function update($id, Request $request)
    {
        $produto = Produto::findOrFail( $id);
        $produto->update($request->all());
        return Redirect::to('/produtos/exibir');

    }

    public function destroy( $id )
    {
        $produto = Produto::findOrFail( $id);
        $produto->delete();
        return Redirect::to('/produtos/exibir');

    }



}


// Implemente, para a mesma entidade Produto, as funcionalidades de listagem, atualização e remoção.
// Utilize, em suas telas, o conceito de layouts e componentes definido pela documentação do Blade.
