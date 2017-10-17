<?php

namespace Bookstore\Http\Controllers;

use Bookstore\Book;
use Bookstore\Author;
use Bookstore\Publisher;
use Bookstore\Genre;
use Bookstore\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Bookstore\Http\Requests;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all()->sortBy('book_isbn');
        //$author = Book::find('book_author', );
        //dd(Book::find('2016158')->book_author);
        //return dd(Book::all()[0]->genre);
        //dd($books->author->fname);
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $genres = Genre::all();
        $publishers = Publisher::all();

        return view('book.create', compact('authors', 'genres', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        Book::create($request->all());

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        $authors = Author::all();
        $genres = Genre::all();
        $publishers = Publisher::all();

        return view('book.show', compact('book', 'authors', 'genres', 'publishers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all();
        $genres = Genre::all();
        $publishers = Publisher::all();
        //dd($book->author->lname);
        return view('book.edit', compact('book', 'authors', 'genres', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $book = Book::find($id);
        $input = $request->all();
        $book->fill($input)->save();

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();

        return redirect('books');
    }
}
