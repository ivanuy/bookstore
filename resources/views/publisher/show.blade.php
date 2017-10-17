@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="publisher_id">Publisher ID:</label>
            <input type="text" name="publisher_id" id="publisher_id" class="form-control" value="{{ old('publisher_id', $publisher->publisher_id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="publisher_name">Publisher name:</label>
            <input type="text" name="publisher_name" id="publisher_name" class="form-control" value="{{ old('publisher_name', $publisher->publisher_name) }}" readonly>
        </div>

        <div class="form-group">
            <a href="{{ url('publishers') }}" class="btn btn-primary">Back</a>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
