@extends('layout')
@section('title', 'Rental View')


@section('content')
<h1 class="display-4 text-center mt-3 mb-3">Rental View</h1>
    @foreach ($rent as $r)
    <form action="/return" method="post">
        @csrf
        <div class="form-group row">
            <label for="ID Rental" class="col-sm-2 col-form-label">ID Rental</label>
            <div class="col-sm-10">
                <input type="text" name="id_rent" class="form-control {{ $errors->has('id_rent') ? 'border-danger' : '' }}" value="{{ $r->id_rent }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Name of Member" class="col-sm-2 col-form-label">Name of Member</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" value="{{ $r->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Movie Title</label>
            <div class="col-sm-10">
                <input type="text" name="movie_title" class="form-control {{ $errors->has('movie_title') ? 'border-danger' : '' }}" value="{{ $r->movie_title }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Rental Date" class="col-sm-2 col-form-label">Rental Date</label>
            <div class="col-sm-10">
                <div class="input-group date">
                <input type="text" name="rental_date" placeholder="Rental Date" class="form-control datepicker {{ $errors->has('movie_title') ? 'border-danger' : '' }}" value="{{ $r->rental_date}}">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="Rental Date" class="col-sm-2 col-form-label">Return Date</label>
            <div class="col-sm-10">
                <div class="input-group date">
                    <input type="text" name="return_date" placeholder="Return Date" class="form-control datepicker {{ $errors->has('movie_title') ? 'border-danger' : '' }}">
                </div>
            </div>
        </div>

        <input type="hidden" name="status" value="Available">       

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Return Movie</button>
            </div>
            <div class="col-sm-5">
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        @include('errors')
        @endforeach
    </form>
@endsection