<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $table = 'credit_cards';
    protected $primaryKey = 'ccard_num';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'ccard_num',
        'ccard_name'
    ];



    public function customer()
    {
        return $this->hasMany('Bookstore\Customer', 'credit_card_type');
    }
}
