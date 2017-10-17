{{ csrf_field() }}

<div class="form-group">
    <label for="cust_id">ID:</label>
    <input type="text" name="cust_id" id="cust_id" class="form-control" value="{{ old('cust_id') }}">
</div>

<div class="form-group">
    <label for="cust_fname">First Name:</label>
    <input type="text" name="cust_fname" id="cust_fname" class="form-control" value="{{ old('cust_fname') }}">
</div>

<div class="form-group">
    <label for="cust_lname">Last Name:</label>
    <input type="text" name="cust_lname" id="cust_lname" class="form-control" value="{{ old('cust_lname') }}">
</div>

<div class="form-group">
    <label for="billing_address1">Billing Address 1:</label>
    <input type="text" name="billing_address1" id="billing_address1" class="form-control" value="{{ old('billing_address1') }}">
</div>

<div class="form-group">
    <label for="billing_address2">Billing Address 2:</label>
    <input type="text" name="billing_address2" id="billing_address2" class="form-control" value="{{ old('billing_address2') }}">
</div>

<div class="form-group">
    <label for="billing_address1">Billing Address 3:</label>
    <input type="text" name="billing_address3" id="billing_address3" class="form-control" value="{{ old('billing_address1') }}">
</div>

<div class="form-group">
    <label for="credit_card_num">Card Number:</label>
    <input type="text" name="credit_card_number" id="credit_card_number" class="form-control" value="{{ old('credit_card_number') }}">
</div>

<div class="form-group">
    <label for="credit_card_flag">Credit Card Flag</label>
    <label for="credit_card_flag_false" class="radio-inline">
        <input onclick="flagHandler(this)" type="radio" name="credit_card_flag" id="credit_card_flag_false" value="0" checked> Flase
    </label>

    <label for="credit_card_flag_true" class="radio-inline">
        <input onclick="flagHandler(this);" type="radio" name="credit_card_flag" id="credit_card_flag_true" value="1"> True
    </label>

    </select>
</div>

<div class="form-group">
    <label for="credit_card_type">Credit Card Type:</label>
    <select name="credit_card_type" id="credit_card_type" class="form-control" disabled="">
        <option value=""></option>
        @foreach($credit_cards as $credit_card)
        <option value="{{ $credit_card->ccard_num }}"> {{ $credit_card->ccard_name }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>


<script type="text/javascript">
    var currVal = undefined;

    function flagHandler(flag) {
        currVal = flag.value;

        if ( parseInt(currVal) === 1) {
            document.getElementById('credit_card_type').disabled = false;
        } else {
            document.getElementById('credit_card_type').disabled = true;
        }
    }

</script>
