<!DOCTYPE html>
<html>
<head>
    <title>Message Board</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

<div class="container">
    @yield('content')
</div>
<style>
    html, body {
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 110vh;
        margin: 5px;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .position-abs {
        position: absolute;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 20px;
    }

    .bottom {
        bottom: 60px;
    }

    .left {
        left: 60px;
    }

    .content {
        font-size: 28px;
        text-align: center;
    }


    .title {
        text-align: center;
        font-size: 75px;
    }

    .warning {
        text-align: center;
        font-weight: bold;
        font-size: 25px;
        color: #AA0000;
        margin: 10px;
    }

    .error {
        font-weight: bold;
        color: #AA0000;
    }

    .success {
        text-align: center;
        font-size: 25px;
        top: 100px;
        color: #003377;
    }

    .home > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 19px;
        font-weight: 600;
        letter-spacing: .125rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 19px;
        font-weight: 600;
        letter-spacing: .125rem;
        text-decoration: none;
    }

    .note {
        background-color: #003377;
        color: #003377;
        font-size: 25px;
        font-weight: 500;
        letter-spacing: .125rem;
        line-height: 60px;
        text-decoration: none;
        height: 0vh;
        text-align: left;
        left: 260px;
        right: 500px;
        top: 200px;
        position: absolute;
        margin: 10px;
        margin-right: 50px;

    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</body>
</html>
