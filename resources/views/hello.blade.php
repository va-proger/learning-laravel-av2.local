@extends('layouts.app')

@section('content')

    <h1>
        @guest()
            Hello, guest!
        @else
            Hello, {{ Auth::user()->name }}!
        @endguest

    </h1>
    @auth()
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
    @endif

@endsection
