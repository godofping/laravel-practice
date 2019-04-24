@extends('internals.layout')

@section('title', 'Customer Page')
    


@section('content')
    <h1>Customers Page</h1>

    <div class="row">
        <div class="col-md-12">

            <form action="customers" method="POST" class="pt-3 pb-5" autocomplete="off">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    <div> {{ $errors->first('name') }} </div>
                </div>
        
        
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    <div> {{ $errors->first('email') }} </div>
                </div>
        
                
        
                <button type="submit" class="btn btn-primary mt-2">Add Cusomter</button>
                @csrf
            </form>

        </div>
    </div>
    
    
    <div class="row">
            <div class="col-md-12">

                <h2>Customer List</h2>
                @foreach ($customers as $customer)
                    <li>{{ $customer->name }} | {{ $customer->email }}</li>
                @endforeach

            </div>
        </div>  


    

@endsection
