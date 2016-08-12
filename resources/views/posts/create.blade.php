@extends('template')
@section('content')
    <h2>Criar novo Post</h2>
   
   
    {!! Form::open(['method'=>'post', 'route'=>'admin.store']) !!}
    <div id="form-group">
        
        {!! Form::label('title','Titulo')!!}
        {!! Form::text('title', null, ['class'=>'form-control'])!!}
    
    </div>
    <div id="form-group">
        {!! Form::label('content','Post') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        
    </div>

    
    <div id="form-group">
        {!! Form::submit('Criar Novo Post',['class'=>'btn btn-primary']) !!}

    </div>
    {!! Form::close() !!}
@endsection