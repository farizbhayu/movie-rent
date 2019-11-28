@extends('layout')

@section('title', 'Member List')


@section('content')
<h1 class="display-4 text-center mt-4">Member List</h1>
<a href="/member/create/" class="btn btn-primary" style="
margin: 20px 0 10px 0;
border-radius: 5px;">Add Member</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Edit</th>
    </tr>
</thead>
    @foreach($member as $members)
    <tr>
        <td>{{ $members->name }}</td>
        <td>{{ $members->address }}</td>
        <td>{{ $members->phone_number }}</td>
    <td><a class="badge badge-info" href="/member/edit/{{ $members->id_member }}">Edit</a></td>
    </tr>
    @endforeach
</table>
@endsection