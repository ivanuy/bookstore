<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(StocksTableSeeder::class);
    }
}
