<?php

namespace Bookstore;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $info)
    {
        $storedItem = ['qty' => $info['qty'], 'price' => $item->stk_price, 'item' => $item];
        $id = $info['id'];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem['qty'] += $this->items[$id]['qty'];
                //$storedItem = $this->items[$id];
            }
        }
        // dd($this->items[$id]);
        //dd($storedItem['qty']);
        //dd($storedItem);
        $storedItem['price'] = $item->stk_price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $storedItem['price'];
    }

    public function removeItem($id)
    {
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
