<?php

use Illuminate\Database\Seeder;
use Bookstore\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book([
            'book_isbn' => '0321965515',
            'book_title' => "Don't Make Me Think, Revisited",
            'book_author' => '1',
            'book_publisher' => '1',
            'book_publish_year' => 2016,
            'book_genre' => '1'
        ]);

        $book->save();

        $book = new Book([
            'book_isbn' => '1591845637',
            'book_title' => 'Super Mario: How Nintendo Conquered America',
            'book_author' => '2',
            'book_publisher' => '2',
            'book_publish_year' => 2016,
            'book_genre' => '2'
        ]);

        $book->save();

        $book = new Book([
            'book_isbn' => '1593274483',
            'book_title' => 'Arduino Workshop',
            'book_author' => '3',
            'book_publisher' => '3',
            'book_publish_year' => 2016,
            'book_genre' => '3'
        ]);

        $book->save();

        $book = new Book([
            'book_isbn' => '0521387078',
            'book_title' => 'Social Network Analysis',
            'book_author' => '4',
            'book_publisher' => '4',
            'book_publish_year' => 2016,
            'book_genre' => '4'
        ]);

        $book->save();

        $book = new Book([
            'book_isbn' => '1449361323',
            'book_title' => 'Data Science for Business',
            'book_author' => '5',
            'book_publisher' => '5',
            'book_publish_year' => 2016,
            'book_genre' => '5'
        ]);

        $book->save();
    }
}
