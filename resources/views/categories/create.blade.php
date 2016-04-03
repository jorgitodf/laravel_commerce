@extends('app')

@section('content')
    <div class="container">
        <h1>Criação de Categoria</h1>
        <br/>

        {!! Form::open(['route'=>'categories.store']) !!}

        <div class="form-group col-sm-8">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::submit('Criar Categoria', ['class'=>'btn btn-primary']) !!}
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