@extends('template')
@section('content')
    <h2>Blog Admin</h2>
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
                <th></th>
            </tr>
        @endforeach
    </table>
{!!$posts->render()!!}
@endsection