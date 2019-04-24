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


                <div class="form-group">
                    <select name="active" class="form-control">
                        <option value="" disabled>Select</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
        
                
        
                <button type="submit" class="btn btn-primary mt-2">Add Customer</button>
                @csrf
            </form>

        </div>
    </div>
    
    
    <div class="row">
        
            <div class="col-md-6">
                <h2>Active Customer List</h2>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name }} | {{ $activeCustomer->email }}</li>
                @endforeach
            </div>

            <div class="col-md-6">
                    <h2>Inactive Customer List</h2>
                    @foreach ($inactiveCustomers as $inactiveCustomer)
                        <li>{{ $inactiveCustomer->name }} | {{ $inactiveCustomer->email }}</li>
                    @endforeach
                </div>
        </div>  


    

@endsection
