@extends('layout')

@section('content')
<h1>List of Customers</h1>

<a href="{{ url('/customers/create') }}" class="btn btn-success">Create Customer</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Billing Address 1</th>
            <th>Billing Address 2</th>
            <th>Billing Address 3</th>
            <th>Credit Card Flag</th>
            <th>Credit Card Type</th>
            <th>Credit Card Number</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->cust_id }}</td>
            <td>{{ $customer->cust_fname }}</td>
            <td>{{ $customer->cust_lname }}</td>
            <td>{{ $customer->billing_address1 }}</td>
            <td>{{ $customer->billing_address2 }}</td>
            <td>{{ $customer->billing_address3 }}</td>
            <td>{{ $customer->credit_card_flag }}</td>
            <td>{{ $customer->credit_card_type }}</td>
            <td>{{ $customer->credit_card_number }}</td>

            <td><a href="{{ route('customers.show', $customer->cust_id) }}" class="btn btn-primary">Show</a></td>

            <td><a href="{{ route('customers.edit', $customer->cust_id) }}" class="btn btn-warning">Update</a></td>

            <td>
                <form action="{{ route('customers.destroy', $customer->cust_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                    <button type="sumbit" id="delete-customerid-{{ $customer->cust_id }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
