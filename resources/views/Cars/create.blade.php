@extends('layouts.app')

@section('content')
    <h1>this index create page</h1>
    <form action="/cars" method="post" 
    enctype="multipart/form-data">
        @csrf
        {{-- @csrf bao mta thong tin ,khi key gui len serve thi se cho request do di qua, --}}
        <input class="form-control" type="file" name="image">
        <input class="form-control" type="text" name="name" placeholder="enter cars name">
        <input class="form-control" type="text" name="description" placeholder="enter cars description">
        <input class="form-control" type="text" name="count" placeholder="enter cars count">
        <div>
            <label>choose a cate:</label>
            {{-- <select name="categories">
                <option value="bee">moto</option>
                <option value="grap">car</option>
                <option value="bae">bike</option>
            </select> --}}

            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

        </div>
        <button class="btn btn-primary" type="submit">submit</button>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
@endsection
