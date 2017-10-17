<?php

namespace Bookstore;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'cust_id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'cust_id',
        'cust_fname',
        'cust_lname',
        'billing_address1',
        'billing_address2',
        'billing_address3',
        'credit_card_flag',
        'credit_card_type',
        'credit_card_number'
    ];

    public function getCreditCardFlagAttribute($val)
    {
        return (int)$val === 0 ? 'false' : 'true';
    }

    public function getCreditCardTypeAttribute($val)
    {
        $ccard = CreditCard::find($val);

        return $ccard->ccard_num === $val ? $ccard->ccard_name : 'unknown';
    }

    public function setCreditCardAttribute($val)
    {
        $card = CreditCard::all();

        return $card->ccard_name === $val ? $card->ccard_num : '0';
    }

    public function creditCard()
    {
        return $this->belongsTo('Bookstore\CreditCard', 'credit_card_type', 'ccard_num');
    }
}
