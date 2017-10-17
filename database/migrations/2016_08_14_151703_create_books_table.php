<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('book_isbn', 100)->primary();
            $table->string('book_title', 100);
            $table->string('book_author', 10);
            $table->string('book_publisher', 10);
            $table->smallInteger('book_publish_year');
            $table->string('book_genre', 10);

            $table->foreign('book_author')->references('author_id')->on('authors');
            $table->foreign('book_publisher')->references('publisher_id')->on('publishers');
            $table->foreign('book_genre')->references('genre_id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Books');
    }
}
