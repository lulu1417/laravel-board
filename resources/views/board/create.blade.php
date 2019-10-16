@extends('board.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right home">
            <a class="btn btn-primary" href="{{ route('board.index') }}">Back</a>
            <a class="btn btn-success" href="{{ route('board.create') }}">Logout</a>
        </div>


        <div class="content">
            <div class="m-b-md">
                <p><strong>Hi</strong> ʕ•ᴥ•ʔ</p>
                <form action="{{ route('board.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <p><label for="subject">SUBJECT*</label></p>
                        <input type="text" id="subject"
                               style="font-family: 'Nunito';
                               padding: 5px 15px;
                               background: #FFCCCC;
                               border: 0 none;
                               -webkit-border-radius: 5px;
                               font-size:20px;
                               width:500px;
                               height:30px;"
                               name="subject" placeholder="Subject"/><br/>
                    </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p><label for="content">CONTENT*</label></p>
                    <textarea class="form-control"
                              style="font-family: 'Nunito', sans-serif;padding: 5px 15px; -webkit-border-radius: 5px; font-size:20px; width:550px;height:100px;"
                              name="content" placeholder="Content"></textarea>
                </div>
            </div>
            <p><label for="screenshot">IMAGE</label></p>
            <input type="file" style="font-family: 'Nunito';
                               padding: 10px 15px;
                               background: #FFCCCC;
                               border: 0 none;
                               -webkit-border-radius: 5px;
                               font-size:20px;
                               width:500px;
                               height:30px;"
                   id="screenshot" name="screenshot"/>
            <hr/>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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
