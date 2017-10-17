@extends('layout')

@section('content')
<h1>Create Stock</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ url('stocks') }}" method="POST" class="col-md-4">

    @include('transaction.stocks.form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
