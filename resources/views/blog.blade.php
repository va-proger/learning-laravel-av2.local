@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>
        Articles
    </h1>
</div>
<div class="list-group">
    @foreach ($articles as $article)
        <a href="/blog/{{ $article->id }}" class="list-group-item list-group-item-action " aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $article->title}} </h5>
                <small>{{ $article->created_at->format('d.m.Y')}}</small>
            </div>
            <p class="mb-1">{{ $article->body}}</p>
            <small>And some small print.</small>
        </a>
    @endforeach
    
    
</div>

@endsection