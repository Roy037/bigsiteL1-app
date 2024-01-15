@extends('layouts.app')

@section('content')
    <h1>update car infomation</h1>
    {{-- chuyen huong den trang upate --}}
    <form action="/cars/{{ $car->id }}" method="post">
        @csrf
        @method('PUT')
        {{-- @csrf bao mta thong tin ,khi key gui len serve thi se cho request do di qua, --}}
        <input class="form-control" type="text" name="name" {{ $car->name }} placeholder="enter cars name">
        <input class="form-control" type="text" name="description" {{ $car->description }}
            placeholder="enter cars description">
        <input class="form-control" type="text" name="count" {{ $car->count }} placeholder="enter cars count">
        <button class="btn btn-primary" type="submit">update infomation</button>
    @endsection
