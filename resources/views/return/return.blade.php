@extends('layout')

@section('title', 'Return List')


@section('content')
<h1 class="display-4 text-center mt-4">Return List</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>ID Return</th>
        <th>ID Rent</th>
        <th>Name</th>
        <th>Movie Title</th>
        <th>Rental Date</th>
        <th>Return Date</th>
    </tr>
</thead>
    @foreach($return as $returns)
    <tr>
        <td>{{ $returns->id_return }}</td>
        <td>{{ $returns->id_rent }}</td>
        <td>{{ $returns->name }}</td>
        <td>{{ $returns->movie_title }}</td>
        <td>{{ $returns->rental_date }}</td>
        <td>{{ $returns->return_date }}</td>
    </tr>
    @endforeach
</table>
@endsection