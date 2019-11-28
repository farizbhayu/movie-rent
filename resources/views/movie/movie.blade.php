@extends('layout')

@section('title', 'Movie List')


@section('content')
<h1 class="display-4 text-center mt-4">Movie List</h1>
<a href="/movie/create/" class="btn btn-primary" style="
margin: 20px 0 10px 0;
border-radius: 5px;">Add Movie</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>No. </th>
        <th>Movie Title</th>
        <th>Genre</th>
        <th>Release Year</th>
        <th>Status</th>
        <th>Edit</th>
    </tr>
</thead>
    @php $no = 1; @endphp
    @foreach($movie as $movies)
    <tr>
        <td>{{ $no++ }}.</td>
        <td>{{ $movies->movie_title }}</td>
        <td>{{ $movies->genre }}</td>
        <td>{{ $movies->years }}</td>
        <td>{{ $movies->status }}</td>
    <td><a class="badge badge-info" href="/movie/edit/{{ $movies->id_movie }}">Edit</a></td>
    </tr>
    @endforeach
</table>
@endsection