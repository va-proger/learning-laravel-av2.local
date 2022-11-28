@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>
        {{ $article->title }}
    </h1>
    <span>Создано: <small>{{ $article->created_at->format('d.m.Y')}}</small></span>
    <p>
        {{ $article->body }}
    </p>
    
    <ul class="list-group">
        @foreach ($article->comments as $comment)    
            <li class="list-group-item">{{$comment->body}} <small>{{ $article->created_at->format('d.m.Y')}}</small></li> 
        @endforeach
    </ul>
</div>


@endsection