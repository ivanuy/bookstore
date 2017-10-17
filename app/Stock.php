<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';
    protected $fillable = [
        'stk_no',
        'stk_isbn',
        'stk_qty',
        'stk_r_level',
        'stk_r_quant',
        'stk_price'
    ];
    protected $primaryKey = 'stk_no';
    public $timestamps = false;
    public $incrementing = false;

    public function book()
    {
        return $this->belongsTo('Bookstore\Book', 'stk_isbn');
    }
}
