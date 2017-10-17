@extends('layout')

@section('content')
<h1>List of Genres</h1>

<a href="{{url('/genres/create')}}" class="btn btn-success">Create Genre</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Genre ID</th>
            <th>Genre name</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($genres as $genre)
        <tr>
            <td>{{$genre->genre_id}}</td>
            <td>{{$genre->genre_name}}</td>
            <td><a href="{{ route('genres.show', $genre->genre_id) }}" class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('genres.edit', $genre->genre_id) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('genres.destroy', $genre->genre_id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="sumbit" id="delete-author-{{ $genre->genre_id }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
