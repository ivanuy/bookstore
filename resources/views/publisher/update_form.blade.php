{{ csrf_field() }}

    <div class="form-group">
        <label for="publisher_id">Publisher ID:</label>
        <input type="text" name="publisher_id" id="publisher_id" class="form-control" value="{{ old('publisher_id', $publisher->publisher_id) }}">
    </div>

    <div class="form-group">
        <label for="publisher_name">Publisher name:</label>
        <input type="text" name="publisher_name" id="publisher_name" class="form-control" value="{{ old('publisher_name', $publisher->publisher_name) }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
