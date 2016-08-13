
@extends('template')
@section('content')
    <h2>Blog Posts</h2>
    @foreach($posts as $post)
        <h3>{{$post->title}}</h3><i>{{$post->created_at}}</i>
        <p>{{$post->content}}</p>
			@foreach($post->comment as $comment)
			@endforeach
        <hr/>
    @endforeach
    {!! $posts->render() !!}
@endsection