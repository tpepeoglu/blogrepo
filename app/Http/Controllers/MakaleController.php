<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Makale;

class MakaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function makaleGetir(){
        $makaleler = Makale::orderBy('id','DESC')->get();
        return view('Welcome',['makaleler'=>$makaleler]);
    }
    public function makaleProfileGetir(){
        $makaleler = Makale::orderBy('id','DESC')->get();
        return view('home.sonyazilar',['makaleler'=>$makaleler]);
    }
    public function makaleDuzenle($id){

        $makale = Makale::find($id);
        return view('home.duzenle',['makale'=>$makale]);
    }
    public function makaleGuncelle(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'baslik' => 'required',
            'icerik' => 'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);

        }
        Makale::find($id)->update($request->all());
        return redirect()->back();
    }

    public function makaleDetay($id){

        $makaledet = Makale::find($id);
        $makaledet->okusay++ ;
        $makaledet->save();
        return view('makale',['makaledet'=>$makaledet]);
    }
    public function yeniMakale()
    {
        return view('home');
    }
    public function makaleSil($id){
        $makale = Makale::find($id);
        $makale->delete();
        return redirect()->back();
    }

    public function makaleEkle(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'baslik' => 'required',
            'icerik' => 'required'
    ]);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);

        }
        // Birinci yol;
        //$makale = new Makale();
        //$makale->baslik=$request->baslik;
        //$makale->icerik=$request->icerik;
        //$makale->save();

        Makale::create($request->all());



        return redirect()->back();

    }
}
