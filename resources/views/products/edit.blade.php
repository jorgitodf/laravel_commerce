@extends('app')

@section('content')
    <div class="container">
        <h1>Edição de Produto: {{ $product->name }}</h1>
        <br/>

        {!! Form::open(['route'=>['products.update', $product->id], 'method'=>'put']) !!}

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
                @else
                {!! Form::radio('featured', 'Sim', $product->featured) !!} Sim
            @endif
            {!! Form::radio('featured', 'Não') !!} Não
            {!! Form::radio('featured', 'Sim') !!} Sim
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('recommend', 'Recomendar:') !!}
            @if ($product->recommend == 'Não')
                {!! Form::radio('recommend', 'Não', $product->recommend) !!} Não
            @else
                {!! Form::radio('recommend', 'Sim', $product->recommend) !!} Sim
            @endif
            {!! Form::radio('recommend', 'Não') !!} Não
            {!! Form::radio('recommend', 'Sim') !!} Sim
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