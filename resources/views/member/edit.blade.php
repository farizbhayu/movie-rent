@extends('layout')
@section('title', 'Member Edit')


@section('content')
<h1 class="display-4 text-center mt-3 mb-3">Edit Member</h1>

@foreach($member as $m)
<form action="/member/update/" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $m->id_member}}">
        <div class="form-group row">
            <label for="Name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" value="{{ $m->name }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            <textarea class="form-control {{ $errors->has('address') ? 'border-danger' : '' }}" name="address" placeholder="Address">{{ $m->address }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone Number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" name="phone_number" class="form-control {{ $errors->has('phone_number') ? 'border-danger' : '' }}" value="{{ $m->phone_number }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Update Member</button>
            </div>
            <div class="col-sm-5">
                <a href="/member/delete/{{ $m->id_member }}" class="btn btn-danger" id="del">Delete Member</a>
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