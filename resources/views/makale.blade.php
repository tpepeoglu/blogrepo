@extends('layouts.menu')
<title>{{$makaledet->baslik}}</title>
@section('content')
    <div class="row" class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{$makaledet->baslik}}</h2>
            </br>
            <p>{{$makaledet->icerik}}</p>
        </div>
    </div>


@endsection