@extends('layout')

@section('content')
<h1>List of Authors</h1>

<a href="{{url('/authors/create')}}" class="btn btn-success">Create Author</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Author ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Author title</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{$author->author_id}}</td>
            <td>{{$author->fname}}</td>
            <td>{{$author->lname}}</td>
            <td>{{$author->author_title}}</td>
            <td><a href="{{ route('authors.show', $author->author_id) }}" class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('authors.edit', $author->author_id) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('authors.destroy', $author->author_id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="sumbit" id="delete-author-{{ $author->author_id }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
