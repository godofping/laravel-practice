@extends('internals.layout')


@section('content')
    <h1>Index Page</h1>

    @foreach ($customers as $customer)
        <li>{{ $customer }}</li>
    @endforeach

@endsection
