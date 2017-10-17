@extends('layout')

@section('content')
<h1>Create Book</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ url('books') }}" method="POST" class="col-md-4">

    @include('book.form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
