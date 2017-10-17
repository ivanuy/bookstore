{{ csrf_field() }}

    <div class="form-group">
        <label for="ccard_num">Card Number:</label>
        <input type="text" name="ccard_num" id="ccard_num" class="form-control" value="{{ old('ccard_num') }}">
    </div>

    <div class="form-group">
        <label for="ccard_name">Card Name:</label>
        <input type="text" name="ccard_name" id="ccard_name" class="form-control" value="{{ old('ccard_name') }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
