@extends('layouts.app')

@section('content')
<h1>
    Students
</h1>
@foreach ($students as $student)
<div class="card mb-3" >
    <div class="row g-0">
        <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                <ul class="list-group">

                    <li class="list-group-item"><span class="fw-bold">Имя:</span> {{ $student->first_name }} </li> 
                    <li class="list-group-item"><span class="fw-bold">Фамилия:</span> {{ $student->last_name }} </li> 
                    <li class="list-group-item"><span class="fw-bold">Возраст:</span> {{ $student->age }} </li> 
                    <li class="list-group-item"><span class="fw-bold">Группа №:</span> {{ $student->group_number }} </li> 
                    <li class="list-group-item"><span class="fw-bold">Курс №:</span> {{ $student->group_number }} </li> 
                    <li class="list-group-item"><span class="fw-bold">Специальность:</span> {{ $student->specialty }} </li> 
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection