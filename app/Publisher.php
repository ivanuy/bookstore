<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';
    protected $primaryKey = 'publisher_id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'publisher_id',
        'publisher_name'
    ];

    public function getPublisherNameAttribute($publisher_name)
    {
        return ucfirst($publisher_name);
    }

    public function book()
    {
        return $this->hasMany('Bookstore\Book', 'book_publisher');
    }
}
