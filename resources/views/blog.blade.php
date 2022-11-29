@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>
        Articles
    </h1>
</div>
@auth()
<form action="/blog/create" method="post" class="mb-2">
    @csrf
    <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title"  >
    </div>
    <div class="mb-3">
    <label for="body" class="form-label">Content</label>
    <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <button type="submit" onclick="event.preventDefault(); addArticle()" class="btn btn-primary">Add Article</button>
</form>
@endif
<script>
    function addArticle(){
        const title = document.querySelector('input[name="title"]').value;
        const body = document.querySelector('textarea[name="body"]').value;
        let formData= new FormData();
        formData.append('title', title);
        formData.append('body', body);
        fetch('/blog/create', {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN" : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }

        })
        location.reload();
    }
</script>
<div class="list-group" style="gap: 10px;">
    @foreach ($articles as $article)
    <div class="d-flex list-group-item list-group-item-action ">
        <a href="/blog/{{ $article->id }}" class="text-black" aria-current="true" style="margin-right: auto;  text-decoration: none; ">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $article->title}} </h5>

            </div>
            <p class="mb-1">{{ $article->body}}</p>
            <small>{{ $article->created_at->format('d.m.Y')}}</small>
        </a>
        @auth()
        <form action="/blog/delete" method="post" class=" ">
            @csrf
            <input type="hidden" name="id" value="{{ $article->id }}">
            <button type="submit" class="btn align-items-center d-flex align-self-start text-uppercase bg-danger fw-bold text-white">Delete <i class="ml-2 fa-solid fa-trash-can  " style="cursor: pointer;"></i></button>
        </form>
        <span class="ms-2 btn align-items-center d-flex align-self-start text-uppercase bg-success fw-bold text-white" style="white-space: nowrap;">
            <a href="/blog/{{ $article->id }}/update" type="submit" class="text-white" style=" text-decoration: none;">Update <i class="ml-2  fa-solid fa-pen" ></i></a>
        </span>
        @endif
    </div>

    @endforeach


</div>

@endsection
