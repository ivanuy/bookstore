@extends('layout')

@section('content')
<h1>List of Publishers</h1>

<a href="{{url('/publishers/create')}}" class="btn btn-success">Create Publisher</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Publisher ID</th>
            <th>Publisher name</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($publishers as $publisher)
        <tr>
            <td>{{$publisher->publisher_id}}</td>
            <td>{{$publisher->publisher_name}}</td>
            <td><a href="{{route('publishers.show',$publisher->publisher_id)}}" class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('publishers.edit', $publisher->publisher_id) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('publishers.destroy', $publisher->publisher_id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="sumbit" id="delete-author-{{ $publisher->publisher_id }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
