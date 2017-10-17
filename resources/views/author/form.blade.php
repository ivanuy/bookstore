{{ csrf_field() }}

    <div class="form-group">
        <label for="author_id">Author ID:</label>
        <input type="text" name="author_id" id="author_id" class="form-control" value="{{ old('author_id') }}">
    </div>

    <div class="form-group">
        <label for="fname">First name:</label>
        <input type="text" name="fname" id="fname" class="form-control" value="{{ old('fname') }}">
    </div>

    <div class="form-group">
        <label for="lname">Last name:</label>
        <input type="text" name="lname" id="lname" class="form-control" value="{{ old('lname') }}">
    </div>

    <div class="form-group">
        <label for="author_title">Author Title:</label>
        <input type="text" name="author_title" id="author_title" class="form-control" value="{{ old('author_title') }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
