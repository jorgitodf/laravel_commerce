@extends('app')

@section('content')
    <div class="container">
        <h1>Criação de Produto</h1>
        <br/>

        {!! Form::open(['route'=>'products.store']) !!}

        <div class="form-group col-sm-8">
            {!! Form::label('category', 'Categoria:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('price', 'Preço:') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('featured', 'Destaque:') !!}
            {!! Form::radio('featured', 'Não') !!} Não
            {!! Form::radio('featured', 'Sim', true) !!} Sim
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('recommend', 'Recomendar:') !!}
            {!! Form::radio('recommend', 'Não') !!} Não
            {!! Form::radio('recommend', 'Sim', true) !!} Sim
        </div>

        <div class="form-group col-sm-8">
            {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
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