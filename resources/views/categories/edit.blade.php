@extends('app')

@section('content')
    <div class="container">
        <h1>Edição de Categoria: {{ $category->name }}</h1>
        <br/>

        {!! Form::open(['route'=>['categories.update', $category->id], 'method'=>'put']) !!}

        <div class="form-group col-sm-8">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::submit('Salvar Categoria', ['class'=>'btn btn-primary']) !!}
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