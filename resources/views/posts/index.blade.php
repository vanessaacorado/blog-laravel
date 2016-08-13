@extends('template')
@section('content')
    <h2>Blog Admin</h2>
    <a href="{{route('admin.create')}}" class="btn btn-success">Novo Post</a>
    <br><br>
    <table class="table">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Acão</th>
            </tr> 
        @foreach($posts as $post)
            <tr>
                <th>{{$post->id}}</th>
                <th>{{$post->title}}</th>
                <th>
                
 						<a href="{{route('admin.edit',['id'=>$post->id])}}" class="btn btn-default">Editar</a>
                   
						<a href="{{route('admin.destroy',['id'=>$post->id])}}" class="btn btn-danger">Delete</a>
                            
                </th>
            </tr>
        @endforeach
    </table>
{!!$posts->render()!!}
@endsection