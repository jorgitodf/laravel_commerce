@extends('app')

@section('content')
    <div class="container">
        <h1>Upload de Imagem</h1>
        <br/>

        {!! Form::open(['route'=>['products.images.store', $product->id], 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}

        <div class="form-group col-sm-8">
            {!! Form::label('image', 'Imagem:') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-8">
            {!! Form::submit('Criar Imagem', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('products') }}" class="btn btn-default">Voltar</a>
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