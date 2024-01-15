@extends('layouts.app')

@section('content')
    <h1>this index cars page</h1>
    <a href="cars/create" class="btn btn-primary" role="button">send information</a>

    @foreach ($cars as $car)
        <li class="list-group-item d-flex justify-content-between align-items">
            <div class="ms-2 me-auto">
                <div class="fw-bold">
                    <a href="/cars/{{ $car->id }}">
                     {{ $car->name }}
                </div>
                {{ $car->description }}
            </div>

            <span class = "badge bg-primary rounded-pill">
                {{ $car->count }}

                {{-- khi bam vao link sechuyen den trang edit --}}
                <a href="cars/{{ $car->id }}/edit">
                    edit
                </a>
                {{-- delete info --}}
                <form action="/cars/{{ $car->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
            </span>
        </li>
    @endforeach
@endsection
