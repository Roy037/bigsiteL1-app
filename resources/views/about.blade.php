@extends('layouts.app')

@section('content')
    <h1>this about pagescontroller</h1>
    {{-- else if trong laravel --}}
    {{ $x = 1 }}
    @if ($x > 2)
        <h2> ccc </h2>
    @elseif ($x < 10)
        <h2> aaa </h2>
    @else
        <h2> bbb </h2>
    @endif
    {{-- unless = if not --}}
    {{-- 2 cach giong nhau phu dinh --}}
    {{-- @unless (empty($name))
            <h2>toi ten roy</h2>
        @endunless --}}

    {{-- @if (!empty($name))
        <h2>toi ten roy</h2>
        @endif --}}

    {{-- @empty(!$name)
        <h2> emtyp roi</h2>
    @endempty --}}

    {{-- @empty($age)
        <h2> age empty</h2>
    @endempty --}}

    {{-- @isset($name)
        <h2> name has khai bao <h2>
    @endisset --}}

    {{-- @switch($name)
        @case('roy')
            <h2> ten la roy</h2>
        @break

        @case('roy1')
            <h2> ten la roy1</h2>
        @break

        @default
            <h2> $ chua khai bao</h2>
    @endswitch --}}

    {{-- @for ($i = 0; $i < 5; $i++)
        <h2> i = {{ $i }}</h2>
    @endfor --}}

    {{-- @foreach ($names as $arraynames)
    <h3>mang names :{{ $arraynames }}</h3>
    @endforeach --}}

    {{-- @forelse ($names as $arraynames)
    <h3>mang names :{{ $arraynames }}</h3>
    
    @empty
    <h3>array empty
    @endforelse --}}
    {{-- {{ $i = 0 }}
    @while ($i < 10)
        <h3> i = {{ $i }}</h3>
        {{ $i++; }}
    @endwhile --}}
@endsection
