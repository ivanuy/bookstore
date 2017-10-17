@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="cust_id">ID:</label>
            <input type="text" name="cust_id" id="cust_id" class="form-control" value="{{ old('cust_id', $customer->cust_id) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="cust_fname">First Name:</label>
            <input type="text" name="cust_fname" id="cust_fname" class="form-control" value="{{ old('cust_fname', $customer->cust_fname) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="cust_lname">Last Name:</label>
            <input type="text" name="cust_lname" id="cust_lname" class="form-control" value="{{ old('cust_lname', $customer->cust_fname) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="billing_address1">Billing Address 1:</label>
            <input type="text" name="billing_address1" id="billing_address1" class="form-control" value="{{ old('billing_address1', $customer->billing_address1) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="billing_address2">Billing Address 2:</label>
            <input type="text" name="billing_address2" id="billing_address2" class="form-control" value="{{ old('billing_address2', $customer->billing_address2) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="billing_address1">Billing Address 3:</label>
            <input type="text" name="billing_address3" id="billing_address3" class="form-control" value="{{ old('billing_address1', $customer->billing_address3) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="credit_card_num">Card Number:</label>
            <input type="text" name="credit_card_number" id="credit_card_number" class="form-control" value="{{ old('credit_card_number', $customer->credit_card_number) }}" disabled="">
        </div>

        <div class="form-group">
            <label for="credit_card_flag">Credit Card Flag</label>
            <label for="credit_card_flag_{{ $customer->credit_card_flag }}" class="radio-inline">
                <input type="radio" name="credit_card_flag" id="credit_card_flag_{{ $customer->credit_card_flag }}" value="0" checked> {{ $customer->credit_card_flag }}
            </label>

            </select>
        </div>

        <div class="form-group">
            <label for="credit_card_type">Credit Card Type:</label>
            <select name="credit_card_type" id="credit_card_type" class="form-control" disabled="">
                <option value="{{ $customer->credit_card_type }}">{{ $customer->credit_card_type }}</option>
            </select>
        </div>

        <div class="form-group">
            <a href="{{ url('customers') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>
@endsection
