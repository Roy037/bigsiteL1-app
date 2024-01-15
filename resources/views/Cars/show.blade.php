@extends('layouts.app')

@section('content')
    <h1>show detail</h1>
    <h3>Name:{{ $car->name }}</h3>
    <img src="{{ asset('images/' . $car->image_path) }}" alt="">
    <h3>Count:{{ $car->count }}</h3>
    <h3>Description:{{ $car->description }}</h3>
    <h3>Category_id:{{ $car->category_id }}</h3>
    <h3>Category's name:{{ $car->category->name }}</h3>
@endsection
