<?php

use Illuminate\Database\Seeder;
use Bookstore\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author([
            'author_id' => '1',
            'fname' => 'Steve',
            'lname' => 'Krug',
            'author_title' => 'programmer'
        ]);

        $author->save();

        $author = new Author([
            'author_id' => '2',
            'fname' => 'Jeff',
            'lname' => 'Ryan',
            'author_title' => 'programmer'
        ]);

        $author->save();

        $author = new Author([
            'author_id' => '3',
            'fname' => 'John',
            'lname' => 'Boxall',
            'author_title' => 'programmer'
        ]);

        $author->save();

        $author = new Author([
            'author_id' => '4',
            'fname' => 'Stanley',
            'lname' => 'Wasserman',
            'author_title' => 'programmer'
        ]);

        $author->save();

        $author = new Author([
            'author_id' => '5',
            'fname' => 'Foster',
            'lname' => 'Provost',
            'author_title' => 'programmer'
        ]);

        $author->save();
    }
}
