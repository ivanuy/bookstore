<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $primaryKey = 'author_id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'author_id',
        'fname',
        'lname',
        'author_title'
    ];

    public function getFnameAttribute($fname)
    {
        return ucfirst($fname);
    }

    public function getLnameAttribute($lname)
    {
        return ucfirst($lname);
    }

    public function fullName()
    {
        return $this->fname.' '.$this->lname;
    }

    public function book()
    {
        return $this->hasMany('Bookstore\Book', 'book_author');
    }
}
