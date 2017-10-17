@extends('layout')

@section('content')
<h1>List of Credit Cards</h1>

<a href="{{url('/creditcards/create')}}" class="btn btn-success">Create Credit Card</a>

<hr>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="bg-info">
                    <th>Card Number</th>
                    <th>Card Name</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($credit_cards as $credit_card)
                <tr>
                    <td>{{ $credit_card->ccard_num }}</td>
                    <td>{{ $credit_card->ccard_name }}</td>

                    <td><a href="{{ route('creditcards.show', $credit_card->ccard_num) }}" class="btn btn-primary">Show</a></td>

                    <td><a href="{{ route('creditcards.edit', $credit_card->ccard_num) }}" class="btn btn-warning">Update</a></td>

                    <td>
                        <form action="{{ route('creditcards.destroy', $credit_card->ccard_num) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" id="delete-creditcard-{{ $credit_card->ccard_num }}" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
