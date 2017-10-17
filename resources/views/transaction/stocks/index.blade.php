@extends('layout')

@section('content')
<h1>List of Stocks</h1>

<a href="{{url('/stocks/create')}}" class="btn btn-success">Create Book</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Stock No</th>
            <th>Stock ISBN</th>
            <th>Stock Quantity</th>
            <th>Stock R Level</th>
            <th>Stock R Quantity</th>
            <th>Stock Price</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stocks as $stock)
        <tr>
            <td>{{$stock->stk_no}}</td>
            <td>{{$stock->book->book_isbn}}</td>
            <td>{{$stock->stk_qty}}</td>
            <td>{{$stock->stk_r_level}}</td>
            <td>{{$stock->stk_r_quant}}</td>
            <td>${{$stock->stk_price}}</td>
            <td><a href="{{ route('stocks.show', $stock->stk_no) }}" class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('stocks.edit', $stock->no) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('stocks.destroy', $stock->stk_no) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="sumbit" id="delete-author-{{ $stock->stk_no }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
