@extends('app')

@section('content')
    <div class="container">
        <h1>Produtos</h1>
        <br/>
        <table class="table table-hover table-bordered">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Destaque</th>
                <th>Recomendar</th>
                <th>Categoria</th>
                <th>Ação</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->featured }}</td>
                <td>{{ $product->recommend }}</td>
                <td>{{ $product->category->name }}</td>
                <td><a href="{{ route('products.edit', ['id'=>$product->id]) }}">Alterar</a> |
                    <a href="{{ route('products.images', ['id'=>$product->id]) }}">Imagens</a> |
                    <a href="{{ route('products.destroy', ['id'=>$product->id]) }}">Excluir</a>
                </td>
            </tr>
                @endforeach
        </table>

        {!! $products->render() !!}
        <br/>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Novo Produto</a>
    </div>


@endsection