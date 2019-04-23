@extends('internals.layout')


@section('content')
    <h1>Index Page</h1>

    <form action="/" method="POST" class="pt-3 pb-5" autocomplete="off">
        <div class="import-group">
            <label>Name:</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            <div> {{ $errors->first('name') }} </div>

            <label>Email:</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
            <div> {{ $errors->first('email') }} </div>
        </div>

        

        <button type="submit" class="btn btn-success mt-2">Add Cusomter</button>
        @csrf
    </form>

    <h2>Customer List</h2>
    @foreach ($customers as $customer)
        <li>{{ $customer->name }} | {{ $customer->name }}</li>
    @endforeach

@endsection
