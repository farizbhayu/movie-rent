@extends('layout')
@section('title', 'Movie List')


@section('content')
<h1 class="display-4 text-center mt-3 mb-3">Edit Movie</h1>

@foreach($movie as $m)
<form action="/movie/update/" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $m->id_movie}}">
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Movie Title</label>
            <div class="col-sm-10">
            <input type="text" name="movie_title" class="form-control {{ $errors->has('movie_title') ? 'border-danger' : '' }}" value="{{ $m->movie_title }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
                <input type="text" name="genre" class="form-control {{ $errors->has('genre') ? 'border-danger' : '' }}" value="{{ $m->genre }}" required>
            </div>
        </div>
        <div class="form-group row">
                <label for="Movie Title" class="col-sm-2 col-form-label">Release Years</label>
                <div class="col-sm-10">
                    <input type="number" name="years" class="form-control {{ $errors->has('years') ? 'border-danger' : '' }}" value="{{ $m->years }}" required>
                </div>
            </div>
        <div class="form-group row">
            <label for="Movie Title" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="form-control {{ $errors->has('status') ? 'border-danger' : '' }}" required>
                    <option>{{ $m->status }}</option>
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Update Movie</button>
            </div>
            <div class="col-sm-5">
                <a href="/movie/delete/{{ $m->id_movie }}" class="btn btn-danger" id="del">Delete Movie</a>
            </div>
        </div>
        @include('errors')
    </form>
    <script>
        jQuery(document).ready(function($){
            $('#del').on('click', function(){
                var getLink = $(this).attr('href');
                swal({
                    title: 'Are You Sure?',
                    text: '',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Please!',
                }, function(){
                    window.location.href = getLink
                });
                return false;
            });
        });
    </script>
    @endforeach
@endsection