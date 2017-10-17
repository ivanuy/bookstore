<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'invo_no';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'invo_no',
        'inv_date',
        'cust_no',
        'pay_method',
        'total_amount'
    ];
}
