@extends('internals.layout')


@section('content')
    <h1>Index Page</h1>

    <form action="/" method="POST" class="pt-3 pb-5">
        <div class="import-group">
            <input type="text" class="form-control" name="name">
        </div>

        <button type="submit" class="btn btn-success mt-2">Add Cusomter</button>
        @csrf
    </form>

    <h2>Customer List</h2>
    @foreach ($customers as $customer)
        <li>{{ $customer->name }}</li>
    @endforeach

@endsection
