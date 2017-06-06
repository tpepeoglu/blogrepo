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
        <li class="active"><a href="#">Yeni Makale Ekle</a></li>
        <li><a href="#">Son Yazılar</a></li>
    </ul>

</br>
    <div class="row">
        <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        </br>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            </div>
                        @endif
                        <form ACTION="{{action('MakaleController@makaleEkle')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label>Başlık</label>
                            <input type="text" name="baslik" class="form-control" value="{{old('baslik')}}">

                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="icerik" cols="20" rows="10" class="form-control" value="{{old('icerik')}}"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success"> Kaydet</button>
                        </div>
                    </div>
        </div>
                        </form>
            </div></div>
</div>
@endsection
