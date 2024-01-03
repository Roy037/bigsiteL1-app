<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>index trang thong tin</h1>
    {{-- <h2>name: {{$title}}</h2>  --}}

    {{-- <h3> {{ $age }} </h3> --}}

    {{-- <h4>name = {{ $name }}</h4> --}}

    {{-- @foreach ($exp as $item)
    <h5>{{ $item }}</h5>
    @endforeach --}}

    {{-- @foreach ($exp1 as $item)
    <h5>{{ $item }}</h5>
    @endforeach --}}

    {{-- @foreach ($products as $item)
    <h5>{{ $item }}</h5>
    @endforeach --}}

    {{-- <h6> {{ $products }} </h6> --}}
    <a href="{{ route('products') }}">link to products</a>
</body>

</html>
