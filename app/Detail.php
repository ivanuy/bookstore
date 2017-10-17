<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'invo_no',
        'bk_isbn',
        'bk_qty',
        'bk_price'
    ];
}
