@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="author_id">Author ID:</label>
            <input type="text" name="author_id" id="author_id" class="form-control" value="{{ old('author_id', $author->author_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="fname">First name:</label>
            <input type="text" name="fname" id="fname" class="form-control" value="{{ old('fname', $author->fname) }}" readonly>
        </div>

        <div class="form-group">
            <label for="lname">Last name:</label>
            <input type="text" name="lname" id="lname" class="form-control" value="{{ old('lname', $author->lname) }}" readonly>
        </div>

        <div class="form-group">
            <label for="author_title">Author Title:</label>
            <input type="text" name="author_title" id="author_title" class="form-control" value="{{ old('author_title', $author->author_title) }}" readonly>
        </div>

        <div class="form-group">
            <a href="{{ url('authors') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
