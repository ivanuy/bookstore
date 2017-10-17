@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if (Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-8 col-md-offset-2 col-sm-offset-3">
            <ul class="list-group">
                {{-- {{ dd($books[2]['item']->book->book_title) }} --}}

                @foreach ($books as $key => $book)
                <li class="list-group-item">
                    <a class="btn btn-danger" href="{{ route('shop.removeItem', ['id' => $key]) }}">
                        <i class="fa fa-trash"></i>
                    </a>
                    <span class="badge">Qty: {{ $book['qty'] }}</span>
                    <strong>{{ $book['item']->book->book_title }}</strong>
                    <span class="label label-success">$ {{ $book['price'] }}</span>

                </li>

                @endforeach
            </ul>
        </div>
        <div class="col-md-2">

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: ${{ $totalPrice }}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <a href="{{ route('checkout') }}" class="btn btn-success" type="button">Checkout</a>
            <a href="{{ route('shop.emptyCart') }}" class="btn btn-danger">Empty Cart</a>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items in your cart</h2>
            </div>
        </div>
    @endif
@endsection
