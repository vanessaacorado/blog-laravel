
@extends('template')
@section('content')
    <h2>Blog Posts</h2>
    @foreach($post as $p)
        <h3>{{$p->title}}</h3><i>{{$p->created_at}}</i>
        <p>{{$p->content}}</p>
			<b>Tags:</b>
			<ul>
				@foreach($p->tags as $tag)			
				<li>{{$tag->tag}}</li>
				@endforeach
			</ul>
			<b>Comentários:</b>
			<ul>
				@foreach($p->comments as $comment)			
				<li>Nome: {{$comment->nome}}</li>
				<li>Comentário:{{$comment->comment}}</li>
				@endforeach
			</ul>
        <hr/>
    @endforeach
    {!! $post->render() !!}
@endsection