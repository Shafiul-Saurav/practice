@extends('master')

@section('title', 'Contact')

@section('content')
    <h1>{{ $pageName }}</h1>
    {{-- @if ($product <= 10)
        <p>Quantity is Reducing</p>
    @else
        <p>Enough Stock</p>
    @endif

    @switch($color)
        @case('Blue')
            <p>Color is Blue</p>
            @break
        @case('Green')
            <p>Color is Green</p>
            @break
        @default
            <p>No Color</p>
    @endswitch

    <h2>
        @empty($info)
            No data found
        @endempty
    </h2> --}}
@endsection
