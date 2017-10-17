{{ csrf_field() }}

    <div class="form-group">
        <label for="genre_id">Genre ID:</label>
        <input type="text" name="genre_id" id="genre_id" class="form-control" value="{{ old('genre_id') }}">
    </div>

    <div class="form-group">
        <label for="genre_name">Genre name:</label>
        <input type="text" name="genre_name" id="genre_name" class="form-control" value="{{ old('genre_name') }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
