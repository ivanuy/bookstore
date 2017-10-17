{{ csrf_field() }}

<div class="form-group">
    <label for="stk_no">Stock No:</label>
    <input type="text" name="stk_no" id="stk_no" class="form-control" value="{{ old('stk_no') }}">
</div>

<div class="form-group">
    <label for="stk_isbn">Stock ISBN:</label>
    <select name="stk_isbn" id="stk_isbn" class="form-control">
        <option value=""></option>
        @foreach($isbns as $isbn)
            <option value="{{ $isbn->book_isbn }}">{{ $isbn->book_isbn }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="stk_qty">Stock Quantity:</label>
    <input type="text" name="stk_qty" id="stk_qty" class="form-control" value="{{ old('stk_qty') }}">
</div>

<div class="form-group">
    <label for="stk_r_level">Stock R Level:</label>
    <input type="text" name="stk_r_level" id="stk_r_level" class="form-control" value="{{ old('stk_r_level') }}">
</div>

<div class="form-group">
    <label for="stk_r_quant">Stock R Quantity:</label>
    <input type="text" name="stk_r_quant" id="stk_r_quant" class="form-control" value="{{ old('stk_r_quant') }}">
</div>

<div class="form-group">
    <label for="stk_price">Stock Price:</label>
    <input type="text" name="stk_price" id="stk_price" class="form-control" value="{{ old('stk_price') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="/stocks/" class="btn btn-warning">Cancel</a></button>
</div>
