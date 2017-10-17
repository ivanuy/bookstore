<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'genre_id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'genre_id',
        'genre_name'
    ];

    public function book()
    {
        return $this->hasMany('Bookstore\Book', 'book_author');
    }
}
