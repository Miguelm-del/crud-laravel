@extends('layouts.layout')

@section('titulo','Cadastro de Produtos')

@section('conteudo')


<header>
    <h2>Cadastro de Produtos</h2>
    <a href="{{ url('produtos/exibir') }}"><button>Ver produtos</button></a></p>
</header>

<body>
    @if (Session::has('success'))
        {{@Session::get('success')}}
    @endif


    @if ( Request::is('*/edit'))

    <a href="{{ url('produtos/exibir')}}">Voltar</a>
    <form action="/produtos/update/{{$produto->id}}" method="POST">
        @csrf
        <label for="nome">
            Nome
        </label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome}}">
        <label for="preco">
            Preco
        </label>
        <input type="number" name="preco" id="preco" min="1" value="{{ $produto->preco}}">
        <label for="custo">
            Custo
        </label>
        <input type="number" name="custo" id="custo" min="0" value="{{ $produto->custo}}">
        <label for="quantidade">
            Quantidade
        </label>
        <input type="number" name="quantidade" id="quantidade" min="1" value="{{ $produto->quantidade}}">

        <input type="submit" value="Atualizar">
    </form>

    @else
    <form action="/produtos" method="POST">
        @csrf
        <label for="nome">
            Nome
        </label>
        <input type="text" name="nome" id="nome">
        <label for="preco">
            Preco
        </label>
        <input type="number" name="preco" id="preco" min="1">
        <label for="custo">
            Custo
        </label>
        <input type="number" name="custo" id="custo" min="0">
        <label for="quantidade">
            Quantidade
        </label>
        <input type="number" name="quantidade" id="quantidade" min="1">

        <input type="submit" value="Cadastrar">
    </form>

    @endif


















@endsection
