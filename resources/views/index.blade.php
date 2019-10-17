@extends('board.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right home">
{{--            <a class="btn btn-primary" href="{{ route('board.show') }}">Back</a>--}}
            <a class="btn btn-success" href="{{ route('board.create') }}">Logout</a>
        </div>

        <div class="content">
            <div class="m-b-md">
                <form action="{{ route('board.login') }}" method="POST">
                    @csrf

                    <div class="row">
                        <p><label for="subject">User Name：</label>
                        <input type="text" id="name"
                               style="font-family: 'Nunito';
                               padding: 5px 15px;
                               background: #FFCCCC;
                               border: 0 none;
                               -webkit-border-radius: 5px;
                               font-size:20px;
                               width:300px;
                               height:30px;"
                               name="subject" placeholder="name"/><br/>
                        <p><label for="password">Password：</label>
                            <input type="text" id="password"
                                   style="font-family: 'Nunito';
                               padding: 5px 15px;
                               background: #FFCCCC;
                               border: 0 none;
                               -webkit-border-radius: 5px;
                               font-size:20px;
                               width:300px;
                               height:30px;"
                                   placeholder="password"/><br/>
                    </div>


        </div>
                <button type="submit" style=" padding:5px 15px;
                background:#FFCCCC;
                color: #444444;
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                font-family: 'Nunito', sans-serif;
                font-size: 19px;" class="btn btn-primary">Submit
                </button>
            </div>
            <div class="warning">
                @if ($errors->any())
                    <strong>Whoops!</strong> There were some problems with your input.<br>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                @endif
            </div>
        </div>


        </form>
@endsection
