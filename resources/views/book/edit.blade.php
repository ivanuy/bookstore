@extends('layout')

@section('content')
<h1>Update Book</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('books.update', $book->book_isbn) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('book.update_form')

    
    </form>
    <div class="col-md-4"></div>
</div>

@endsection
