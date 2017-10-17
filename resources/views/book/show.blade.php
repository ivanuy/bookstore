@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="book_isbn">Book ISBN:</label>
            <input type="text" name="book_isbn" id="book_isbn" class="form-control" value="{{ old('book_isbn', $book->book_isbn) }}" readonly>
        </div>

        <div class="form-group">
            <label for="book_title">Title:</label>
            <input type="text" name="book_title" id="book_title" class="form-control" value="{{ old('book_title', $book->book_title) }}" readonly>
        </div>

        <div class="form-group">
            <label for="book_author">Author:</label>
            <select name="book_author" id="book_author" class="form-control" readonly>
                @foreach($authors as $author)

                    @if($author->author_id === $book->book_author)
                        <option value="{{ $author->author_id }}" selected="">{{ ucfirst($author->lname) . ', ' . ucfirst($author->fname)}}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="book_publisher">Publisher:</label>
            <select name="book_publisher" id="book_publisher" class="form-control" readonly>
                @foreach($publishers as $publisher)

                    @if($publisher->publisher_id === $book->book_publisher)
                        <option value="{{ $publisher->publisher_id }}" selected="">{{ ucfirst($publisher->publisher_name) }}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="book_publish_year">Publish Year:</label>
            <input type="text" name="book_publish_year" id="book_publish_year" class="form-control" value="{{ old('book_publish_year', $book->book_publish_year) }}" readonly>
        </div>

        <div class="form-group">
            <label for="book_genre">Genre:</label>
            <select name="book_genre" id="book_genre" class="form-control" readonly>
                @foreach($genres as $genre)

                    @if($genre->genre_id === $book->book_genre)
                        <option value="{{ $genre->genre_id }}" selected="">{{ ucfirst($genre->genre_name) }}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <a href="{{ url('books') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
