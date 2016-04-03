@extends('app')

@section('content')
    <div class="container">
        <h1>Categorias</h1>
        <br/>
        <table class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td><a href="{{ route('categories.edit', ['id'=>$category->id]) }}">Alterar</a> |
                    <a href="{{ route('categories.destroy', ['id'=>$category->id]) }}">Excluir</a>
                </td>
            </tr>
                @endforeach
        </table>
        <br/>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
    </div>


@endsection