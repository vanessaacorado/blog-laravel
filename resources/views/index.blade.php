
@extends('template')
@section('content')
    <h2>Blog Posts</h2>
    @foreach($posts as $post)
        <h3>{{$post->title}}</h3><i>{{$post->created_at}}</i>
        <p>{{$post->content}}</p>
        <b>
            Tags:
            <br>
            @foreach($post->tags     as $tag)
                <i>{{$tag->tag}}</i>
            @endforeach
        </b>
        <h3>Comentários</h3>
        @foreach($post->comments as $comment)
            <b>Nome: </b><i>{{$comment->nome}}</i><br/>
            <b>E-mail: </b><i>{{$comment->email}}</i><br/>
            <b>Comentário: </b><i>{{$comment->comment}}</i><br/><br/>
        @endforeach
        <hr/>
    @endforeach
@endsection