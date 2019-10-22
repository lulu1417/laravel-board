@extends('main')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right home">
            <a class="home" href="{{ url('') }}">Login</a>
            <a class="home" href="{{ route('board.index') }}">View</a>
        </div>
        <div class="content">
            <div class="m-b-md">
                @if ($errors->any())
                    <div class="warning">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login.store') }}" method="POST">
                    @csrf

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>User Name:
                            <input type="text" name="name" style="font-family: 'Nunito';
                               padding: 5px 15px;
                               background: #FFCCCC;
                               border: 0 none;
                               -webkit-border-radius: 5px;
                               font-size:20px;
                               width:300px;
                               height:30px;" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>Password:
                            <input type="password" style="font-family: 'Nunito';
                               padding: 5px 15px;
                               background: #FFCCCC;
                               border: 0 none;
                               -webkit-border-radius: 5px;
                               font-size:20px;
                               width:300px;
                               height:30px;" name="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" style=" padding:5px 15px;
                background:#FFCCCC;
                color: #444444;
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                font-family: 'Nunito', sans-serif;
                font-size: 19px;" class="btn btn-primary">Register
                        </button>
                    </div>
                </form>
            </div>
@endsection


