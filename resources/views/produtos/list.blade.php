@extends('layouts.layout')

@section('titulo','Listagem de Produtos')

@section('conteudo')


<h2>Lista de Produtos</h2>
<p><- Adicionar produto -> <a href="{{ url('produtos/novo') }}"><button>+</button></a></p>

<div id="tabela-produtos">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nome</th>
                <th scope="col">Preco</th>
                <th scope="col">Custo</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->custo }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>
                    <a href="/produtos/{{ $produto->id }}/edit" class="edit">Editar</a>
                </td>
                <td>
                    <form action="/produtos/destroy/{{ $produto->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="destroy">Deletar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endforeach

@endsection
