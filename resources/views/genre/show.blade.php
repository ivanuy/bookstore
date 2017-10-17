@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="genre_id">Genre ID:</label>
            <input type="text" name="genre_id" id="genre_id" class="form-control" value="{{ old('genre_id', $genre->genre_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="genre_name">Genre name:</label>
            <input type="text" name="genre_name" id="genre_name" class="form-control" value="{{ old('genre_name', $genre->genre_name) }}" readonly>
        </div>

        <div class="form-group">
            <a href="{{ url('genres') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>
@endsection
