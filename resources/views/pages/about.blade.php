@extends('master')

@section('title', 'About')

@section('content')
    <h1>{{ $pageName }}</h1>
    {{-- <p>{{ $email }}</p>

    <ul>
        @forelse ($products as $key => $product)
            @include('partial.product')
        @empty
            No product Found
        @endforelse
    </ul> --}}
@endsection
