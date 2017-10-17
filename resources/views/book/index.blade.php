@extends('layout')

@section('content')
<h1>List of Books</h1>

<a href="{{url('/books/create')}}" class="btn btn-success">Create Book</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Book ISBN</th>
            <th>Book Title</th>
            <th>Book Author</th>
            <th>Book Publisher</th>
            <th>Book Publish Year</th>
            <th>Book Genre</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->book_isbn}}</td>
            <td>{{$book->book_title}}</td>
            <td>{{ $book->author->lname . ', ' . $book->author->fname }}</td>
            <td>{{$book->publisher->publisher_name}}</td>
            <td>{{ $book->book_publish_year }}</td>
            <td>{{ $book->genre->genre_name }}</td>
            <td><a href="{{ route('books.show', $book->book_isbn) }}" class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('books.edit', $book->book_isbn) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('books.destroy', $book->book_isbn) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="sumbit" id="delete-author-{{ $book->book_isbn }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
