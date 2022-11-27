@extends('layouts.app')

@section('content')
    <h1>
        Hello, {{ $name  }}!
    </h1>
    <h2 class="mb-2">My skills:</h2>
    
    <ul class="list-group ">
        
        @if (count($skills) > 0)
            @foreach ($skills as $skill)
                <li class="list-group-item">{{ $skill }}</li>
            @endforeach 
        @else
            <div class="alert alert-danger" role="alert">
                You have not skills...
            </div>
        @endif
    </ul>
@endsection