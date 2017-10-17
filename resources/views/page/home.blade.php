@extends('layout')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div id="notify">
    @foreach ($notify as $n)
    <div class="alert alert-warning">
      <strong>Warning!</strong> Low Stocks for stock no:{{$n->stk_no}}
    </div>
    @endforeach
</div>

<div style="
margin-top: 7%;
">
    <center><h1>Bookstore</h1></center>

    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Books</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('books') }}" role="button">View books &raquo;</a>
                </p>
             </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Authors</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('authors') }}" role="button">View authors &raquo;</a>
                </p>
             </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Publishers</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('publishers') }}" role="button">View publishers &raquo;</a>
                </p>
             </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Genres</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('genres') }}" role="button">View genres &raquo;</a>
                </p>
             </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Customers</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('customers') }}" role="button">View genres &raquo;</a>
                </p>
             </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Credit Cards</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('creditcards') }}" role="button">View credit cards &raquo;</a>
                </p>
             </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <h2>Stocks</h2>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('stocks') }}" role="button">View Stocks &raquo;</a>
                </p>
             </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')
<script type="text/javascript">
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    //$("#notify").remove();
    //$("#notify").remove();

    //ajax
    setInterval(notif, 1000);

    function notif()
    {
        $.get('/admin',function(data)
        {
            if (!data) {
                $("#notify").remove();
            }
            //$("#notify").show();
            //console.log(1);
        });


    }

</script>

@endsection
