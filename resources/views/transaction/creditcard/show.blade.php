@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="ccard_num">Card Number:</label>
            <input type="text" name="ccard_num" id="ccard_num" class="form-control" value="{{ old('ccard_num', $credit_card->ccard_num) }}" readonly>
        </div>

        <div class="form-group">
            <label for="ccard_name">Card Name:</label>
            <input type="text" name="ccard_name" id="ccard_name" class="form-control" value="{{ old('ccard_name', $credit_card->ccard_name) }}" readonly>
        </div>

        <div class="form-group">
            <a href="{{ url('creditcards') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>
@endsection
