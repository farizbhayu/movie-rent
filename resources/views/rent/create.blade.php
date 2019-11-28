@extends('layout')
@section('title', 'Add Movie')


@section('content')
<h1 class="display-4 text-center mt-3 mb-3">Add Tenant</h1>

    <form action="/rent" method="post">
        @csrf
        <div class="form-group row">
            <label for="Name of Member" class="col-sm-2 col-form-label">Name of Member</label>
            <div class="col-sm-10">
                <select name="name" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" required>
                        <option value="" aria-readonly="true">-- SELECT --</option>
                    @foreach ($member as $row)
                        <option value="{{ $row->name }}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Movie Title</label>
            <div class="col-sm-10">
                <select name="movie_title" class="form-control {{ $errors->has('movie_title') ? 'border-danger' : '' }}">
                        <option value="" aria-readonly="true">-- SELECT --</option>
                    @foreach($movie as $r)
                        <option value="{{ $r->movie_title}}">{{ $r->movie_title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Rental Date" class="col-sm-2 col-form-label">Rental Date</label>
            <div class="col-sm-10">
                <div class="input-group date">
                    <input type="text" name="rental_date" placeholder="Rental Date" class="form-control datepicker">
                </div>
            </div>
        </div>

        <input type="hidden" name="status" value="Not Available">       

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Add Tenant</button>
            </div>
            <div class="col-sm-5">
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        @include('errors')
        <script type="text/javacript">
            
        </script>
    </form>
@endsection