@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <div class="page-header">
                    <h1> HOŞGELDİNİZ</h1></div>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li><a href="{{url('/home')}}">Yeni Makale Ekle</a></li>
            <li class="active"><a href="sonyazilar">Son Yazılar</a></li>
            <li><a href="">Makale Düzenle</a></li>
        </ul>
        </br>
    </div>
        <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        </br>
                        <div class="row" class="col-sm-8 blog-main">
                            @foreach($makaleler as $makale)
                                <div class="blog-post">
                                    <h2 class="blog-post-title"><a href="duzenle/{{$makale->id}}">{{$makale->baslik}}</a></h2><small> <a href="sil/{{$makale->id}}">Sil</a></small>
                                    <p>{{$makale->icerik}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div></div>
        </div>
@endsection