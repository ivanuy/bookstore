@extends('layouts.master')

@section('title')
    Bookstore
@endsection

@section('content')
    @foreach ($stocks->chunk(3) as $stockChunk)
    <div class="row">
        @foreach ($stockChunk as $stock)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

                @if (file_exists(public_path().'/images/'.$cover_img[$stock->book->book_title]))
                    <img src="/images/{{ $cover_img[$stock->book->book_title] }}" alt="..." class="img-responsive">
                @else
                <img src="{{ URL::to('/images/bookcover.jpg') }}" alt="..." class="img-responsive">
                @endif

                <div class="caption">
                    <h3>{{ $stock->book->book_title }}</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!</p>
                    <span class="label label-info">ISBN: {{$stock->stk_isbn}}</span>
                    <span class="label label-info">Author: {{$stock->book->author->fullName()}}</span>
                    <hr>
                    @if ($stock->stk_qty > 0)
                        <span class="label label-primary">On Stock</span>
                        <span class="label label-default">Stocks Remaining: {{ $stock->stk_qty }}</span>
                        <span class="label label-info">On SALE!</span>
                    @else
                        <span class="label label-warning">Out of Stock</span>
                    @endif
                    <hr>
                    <form action="{{ route('shop.addToCart', ['id' => $stock->stk_no]) }}">
                        {{ csrf_field() }}
                        <div class="clearfix">
                            @if ($stock->stk_qty > 0)
                                <div class="pull-left price">${{ $stock->stk_price }}</div>
                                <input type="submit" class="btn btn-success pull-right" value="Add to Cart">
                                <div class="col-md-3 pull-right">
                                    <input class="form-control" type="number" name="qty" min="1" max="{{ $stock->stk_qty }}" value="1">
                                </div>
                                <label for="" class="pull-right">Qty:</label>
                            @else
                                <div class="pull-left price"><strike>${{ $stock->stk_price }}</strike></div>
                                <a href="#" class="btn btn-success pull-right" role="button" disabled>Add to Cart</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

@endsection
