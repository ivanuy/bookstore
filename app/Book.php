<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'book_isbn',
        'book_title',
        'book_author',
        'book_publisher',
        'book_publish_year',
        'book_genre'
    ];
    protected $primaryKey = 'book_isbn';
    public $timestamps = false;
    public $incrementing = false;

    public function getBooktitleAttribute($book_title)
    {
        return ucfirst($book_title);
    }

    public function author()
    {
        return $this->belongsTo('Bookstore\Author', 'book_author', 'author_id');
    }

    public function publisher()
    {
        return $this->belongsTo('Bookstore\Publisher', 'book_publisher', 'publisher_id');
    }

    public function genre()
    {
        return $this->belongsTo('Bookstore\Genre', 'book_genre', 'genre_id');
    }

    public function stock()
    {
        return $this->hasMany('Bookstore\Stock', 'stk_isbn');
    }
}
