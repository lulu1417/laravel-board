@extends('board.layout')
@section('content')
    <div class="flex-center position-ref full-height">
    <div class="top-right home">
        <a class="btn btn-success" href="{{ route('board.create') }}">Leave a message</a>
        <a class="btn btn-success" href="{{ route('board.create') }}">Login</a>
    </div>
<div class="note full-height">
    @foreach ($messages as $message)

        <br>No：{{ ++$i }}</br>
        <br>Visitor Name：{{ $message->name }}</br>
        <br>Subject：{{ $message->subject }}</br>
        <br>Content：{{ $message->content }}</br>
{{--        @if<br>Image：{{ $product->image }}</br>@endif--}}
        <br>
        <form action="{{ route('products.destroy',$message->id) }}" method="POST">

            <a class="btn btn-primary" href="{{ route('products.edit',$message->id) }}">Edit</a>
            <a class="btn btn-info" href="{{ route('products.show',$message->id) }}">Delete</a>
            @csrf
            @method('DELETE')
        </form>
        </br>

    @endforeach
    <br>
    <div class="bottom left position-abs content">
        There are {{$i}} messages.
    </div>
    </br>
</div>

@endsection
