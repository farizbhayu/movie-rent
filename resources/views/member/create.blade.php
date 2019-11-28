@extends('layout')
@section('title', 'Add Member')


@section('content')
<h1 class="display-4 text-center mt-3 mb-3">Add Member</h1>

    <form action="/member" method="post">
        @csrf
        <div class="form-group row">
            <label for="Name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            <textarea class="form-control {{ $errors->has('address') ? 'border-danger' : '' }}" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone Number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="number" name="phone_number" class="form-control {{ $errors->has('phone_number') ? 'border-danger' : '' }}" placeholder="Phone Number" value="{{ old('phone_number')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Add Member</button>
            </div>
            <div class="col-sm-5">
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        @include('errors')
    </form>
@endsection