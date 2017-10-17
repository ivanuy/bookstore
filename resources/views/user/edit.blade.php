@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('content')
<h1>Edit Profile</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('user.editProfile.update', Auth::user()->id) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('user.form')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </form>
    <div class="col-md-4"></div>
</div>
@endsection
