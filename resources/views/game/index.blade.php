@extends('game.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>I want to play a game, you have to make a choice.</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('game.create') }}"> Enter Your Guess</a>
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
            <th>Guess</th>
            <th>Hint</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($guess as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('game.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('game.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('game.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
