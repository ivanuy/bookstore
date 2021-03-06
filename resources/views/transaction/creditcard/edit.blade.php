@extends('layout')

@section('content')
<h1>Update Credit Card</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('creditcards.update', $credit_card->ccard_num) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('transaction.creditcard.update_form')

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
