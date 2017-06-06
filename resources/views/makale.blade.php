<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biz Kimiz?</title>

    <!-- Bootstrap -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="container">
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                @if (Route::has('login'))
                    <li><a href="{{url('/')}}">Ana Sayfa</a></li>
                    <li><a href="{{url('about')}}">Biz Kimiz</a></li>

                    @if (Auth::check())
                        <li> <a href="{{ url('/home') }}">Profil</a></li>
                    @else
                        <li> <a href="{{ url('/login') }}">Giriş</a></li>
                        <li> <a href="{{ url('/register') }}">Kayıt Ol</a></li>
                    @endif

                @endif
            </ul>
        </nav>

    </div>
    <div class="row" class="col-sm-8 blog-main">
        @foreach($makaleler as $makale)

            <div class="blog-post">
                <h2 class="blog-post-title">{{$makale->baslik}}</h2>

                </br>
                <p>{{$makale->icerik}}</p>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>