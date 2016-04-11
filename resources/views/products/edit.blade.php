@extends('app')

@section('content')
    <div class="container">
        <h1>Edição de Produto: {{ $product->name }}</h1>
        <br/>

        {!! Form::open(['route'=>['products.update', $product->id], 'method'=>'put']) !!}

        <div class="form-group col-sm-8">
            {!! Form::label('category', 'Categoria:') !!}
            {!! Form::select('category_id', $categories, $product->category->id, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('price', 'Preço:') !!}
            {!! Form::text('price', $product->price, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('featured', 'Destaque:') !!}
            @if ($product->featured == 'Não')
                {!! Form::radio('featured', 'Não', $product->featured) !!} Não
                {!! Form::radio('featured', 'Sim') !!} Sim
                @else
                {!! Form::radio('featured', 'Sim', $product->featured) !!} Sim
                {!! Form::radio('featured', 'Não') !!} Não
            @endif
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('recommend', 'Recomendar:') !!}
            @if ($product->recommend == 'Não')
                {!! Form::radio('recommend', 'Não', $product->recommend) !!} Não
                {!! Form::radio('recommend', 'Sim') !!} Sim
            @else
                {!! Form::radio('recommend', 'Sim', $product->recommend) !!} Sim
                {!! Form::radio('recommend', 'Não') !!} Não
            @endif
        </div>

        <div class="form-group col-sm-8">
            {!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        <div class="form-group col-sm-5">
        @if ($errors->any())
            <ul class="bg-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        </div>
    </div>
@endsection