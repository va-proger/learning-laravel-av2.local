@extends('layouts.app')

@section('content')
    <h1>
        Todos
    </h1> 
    @include('components.links_todos')
    <ol class="list-group list-group-numbered">
        @foreach ($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">{{ $todo->title }}</div>
            <p>{{$todo->note }}</p>
            </div>
            @if ($todo->status === 1)
                <span class="badge bg-success rounded-pill">Выполнено</span>
            @else
                <span class="badge bg-danger rounded-pill">Не выполнено</span>
            @endif
        </li>
        @endforeach
    </ol>
@endsection