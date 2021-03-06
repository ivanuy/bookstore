@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
<h1>User Profile</h1>
<center><h3>My Transaction</h3></center>

<input type="hidden" value="{{ $counter = 0 }}">

@foreach ($invoices as $invoice)
    <input type="hidden" value="{{ ++$counter }}">
    {{-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> --}}
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{{$counter}}">
        <h4 class="panel-title">
            Invoice No:
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$counter}}" aria-expanded="false" aria-controls="collapse{{$counter}}">
              <span class="label label-primary">{{ $invoice->invo_no }}</span>
            </a>
            Date: <span class="label label-info">{{ $invoice->inv_date }}</span>
            Pay Method: <span class="label label-info">Cash</span>
            Total Amount: <span class="label label-info">${{ $invoice->total_amount }}</span>
         </h4>
    </div>
    {{-- {{ dd($details) }} --}}
    <div id="collapse{{$counter}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$counter}}">
            <div class="panel-body">
                <h4>Details</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Invoice No</th>
                            <th>ISBN</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($details as $detail)
                                @foreach ($detail as $d)
                                    @if ($d->invo_no == $invoice->invo_no)
                                        @if (sizeof($detail) > 1)
                                            <tr>
                                                <td>{{ $d->invo_no }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="
                                                    @foreach ($stocks as $stock)
                                                        @if ($stock->stk_isbn === $d->bk_isbn)
                                                            {{$stock->book->book_title}}
                                                        @endif
                                                    @endforeach
                                                    ">
                                                        {{ $d->bk_isbn }}
                                                    </button>
                                                </td>
                                                <td>{{ $d->bk_qty}}</td>
                                                <td>${{ $d->bk_price }}</td>
                                            </tr>
                                        @else
                                            <td>{{ $d->invo_no }}</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="
                                                @foreach ($stocks as $stock)
                                                    @if ($stock->stk_isbn === $d->bk_isbn)
                                                        {{$stock->book->book_title}}
                                                    @endif
                                                @endforeach
                                                ">
                                                    {{ $d->bk_isbn }}
                                                </button>
                                            </td>
                                            <td>{{ $d->bk_qty}}</td>
                                            <td>${{ $d->bk_price }}</td>
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>
    <hr>
@endforeach
{{-- {{ dd($stocks)}} --}}

@endsection

@section('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
