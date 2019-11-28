@extends('layout')
@section('title', 'Add Movie')


@section('content')
<h1 class="display-4 text-center mt-3 mb-3">Add Movie List</h1>

    <form action="/movie" method="post">
        @csrf
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Movie Title</label>
            <div class="col-sm-10">
            <input type="text" name="movie_title" id="" class="form-control {{ $errors->has('movie_title') ? 'border-danger' : '' }}" placeholder="Enter Movie Title" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
            <input type="text" name="genre" id="" class="form-control {{ $errors->has('genre') ? 'border-danger' : '' }}" placeholder="Enter Genre" value="{{ old('genre')}}" required>
            </div>
        </div>
        <div class="form-group row">
                <label for="Movie Title" class="col-sm-2 col-form-label">Release Year</label>
                <div class="col-sm-10">
                <input type="number" name="years" id="" class="form-control {{ $errors->has('years') ? 'border-danger' : '' }}" placeholder="Enter Years" value="{{ old('years')}}" required>
                </div>
            </div>
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="form-control {{ $errors->has('status') ? 'border-danger' : '' }}" required>
                    <option value="" aria-readonly="true">-- SELECT --</option>
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Add Movie</button>
            </div>
            <div class="col-sm-5">
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        @include('errors')
    </form>
@endsection