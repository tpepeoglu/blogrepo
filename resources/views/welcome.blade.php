<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taraftarın gözünden</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/css/bootstrap.min.css" rel="stylesheet">
        <style>
            html {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .content {
                text-align: center;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
    <div class="container">
       <div class="row">
           <nav class="navbar navbar-inverse" >
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

          <div class="content">
                <!-- Anasayfa --->
                <div class="page-header">
                    <h1>BLOG UYGULAMASI</br><small>Daha bitmedi başlangıçlar </small></h1>
                </div></div>
                       <div class="row" class="col-sm-8 blog-main">
                         @foreach($makaleler as $makale)

                  <div class="blog-post">
                     <a href="makale/{{$makale->$id}}"><h2 class="blog-post-title">{{$makale->baslik}}</h2></a>

                      </br>
                      <p>{{$makale->icerik}}</p>
                  </div>
                        @endforeach
                       </div>
    </body>
</html>
