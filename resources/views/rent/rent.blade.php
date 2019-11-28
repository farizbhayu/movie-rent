@extends('layout')

@section('title', 'List Tenant')


@section('content')
<h1 class="display-4 text-center mt-4">Tenant List</h1>
<a href="/rent/create/" class="btn btn-primary" style="
margin: 20px 0 10px 0;
border-radius: 5px;">Add Tenant</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>ID Member </th>
        <th>Name of Member</th>
        <th>Movie Title</th>
        <th>Rental Date</th>
        <th>Edit</th>
    </tr>
</thead>
    @foreach($rent as $rents)
    <tr>
        <td>{{ $rents->id_rent }}.</td>
        <td>{{ $rents->name }}</td>
        <td>{{ $rents->movie_title }}</td>
        <td>{{ $rents->rental_date }}</td>
    <td><a class="badge badge-info" href="/rent/view/{{ $rents->id_rent }}">View</a></td>
    </tr>
    @endforeach
</table>
@endsection