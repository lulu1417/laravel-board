@extends('board.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right home">
            <a class="btn btn-success" href="{{ route('board.create') }}">Write an article</a>
            <a class="btn btn-success" href="{{ url('') }}">Login</a>
        </div>
        <div class="note full-height">
            @foreach ($messages as $product)
                <tr>
                    <br>No：
                    {{ ++$i }}
                    <br>Name：
                    {{ $product->name }}
                    <br>Subject：
                    {{ $product->subject }}
                    <br>Details：
                    {{ $product->content }}
                    <form action="{{ route('board.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('board.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('board.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <br>
                        <button type="submit" style=" padding:5px 15px;
                background:#FFCCCC;
                color: #444444;
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                font-family: 'Nunito', sans-serif;
                font-size: 19px;">Delete
                        </button>
                    </form>
                </tr>
                @endforeach
                </table>
                <div class="bottom left position-abs content">
                    There are {{$i}} articles.
                </div>

@endsection
