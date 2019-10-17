{{--@extends('board.layout')--}}
{{--@section('content')--}}
{{--    <div class="flex-center position-ref full-height">--}}
{{--    <div class="top-right home">--}}
{{--        <a class="btn btn-success" href="{{ route('board.create') }}">Leave a message</a>--}}
{{--        <a class="btn btn-success" href="{{ route('board.create') }}">Login</a>--}}
{{--    </div>--}}
{{--<div class="note full-height">--}}
{{--    @foreach ($messages as $message)--}}

{{--        <br>No：{{ ++$i }}</br>--}}
{{--        <br>Visitor Name：{{ $message->name }}</br>--}}
{{--        <br>Subject：{{ $message->subject }}</br>--}}
{{--        <br>Content：{{ $message->content }}</br>--}}
{{--        @if<br>Image：{{ $product->image }}</br>@endif--}}
{{--        <br>--}}
{{--        <form action="{{ route('board.destroy',$message->id) }}" method="POST">--}}

{{--            <a class="btn btn-primary" href="{{ route('board.edit',$message->id) }}">Edit</a>--}}
{{--            <a class="btn btn-info" href="{{ route('board.destroy',$message->id) }}">Delete</a>--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--        </form>--}}
{{--        </br>--}}

{{--    @endforeach--}}
{{--    <br>--}}
{{--    <div class="bottom left position-abs content">--}}
{{--        There are {{$i}} messages.--}}
{{--    </div>--}}
{{--    </br>--}}
{{--</div>--}}

{{--@endsection--}}


@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($messages as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('board.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('board.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('board.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $messages->links() !!}

@endsection
