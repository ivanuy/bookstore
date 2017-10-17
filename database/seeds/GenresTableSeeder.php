<?php

use Illuminate\Database\Seeder;
use Bookstore\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre([
            'genre_id' => '1',
            'genre_name' => 'technology'
        ]);

        $genre->save();

        $genre = new Genre([
            'genre_id' => '2',
            'genre_name' => 'technology'
        ]);

        $genre->save();

        $genre = new Genre([
            'genre_id' => '3',
            'genre_name' => 'technology'
        ]);

        $genre->save();

        $genre = new Genre([
            'genre_id' => '4',
            'genre_name' => 'technology'
        ]);

        $genre->save();

        $genre = new Genre([
            'genre_id' => '5',
            'genre_name' => 'technology'
        ]);

        $genre->save();
    }
}
