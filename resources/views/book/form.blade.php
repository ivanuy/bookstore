{{ csrf_field() }}

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="book_isbn">Book ISBN:</label>
    <input type="text" name="book_isbn" id="book_isbn" class="form-control" value="{{ old('book_isbn') }}">
</div>

<div class="form-group">
    <label for="book_title">Title:</label>
    <input type="text" name="book_title" id="book_title" class="form-control" value="{{ old('book_title') }}">
</div>

<div class="form-group">
    <label for="book_author">Author:</label>
    <select name="book_author" id="book_author" class="form-control">
        <option value=""></option>
        @foreach($authors as $author)
            <option value="{{ $author->author_id }}">{{ ucfirst($author->lname) . ', ' . ucfirst($author->fname)}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="book_publisher">Publisher:</label>
    <select name="book_publisher" id="book_publisher" class="form-control">
        <option value=""></option>
        @foreach($publishers as $publisher)
            <option value="{{ $publisher->publisher_id }}">{{ ucfirst($publisher->publisher_name) }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="book_publish_year">Publish Year:</label>
    <input type="text" name="book_publish_year" id="book_publish_year" class="form-control" value="{{ old('book_publish_year') }}">
</div>

<div class="form-group">
    <label for="book_genre">Genre:</label>
    <select name="book_genre" id="book_genre" class="form-control">
        <option value=""></option>
        @foreach($genres as $genre)
            <option value="{{ $genre->genre_id }}">{{ ucfirst($genre->genre_name) }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
