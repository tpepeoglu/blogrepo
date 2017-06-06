<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Makale;

class MakaleController extends Controller
{
    public function makaleGetir(){
        $makaleler = Makale::orderBy('id','DESC')->get();
        return view('Welcome',compact('makaleler'));
    }
    public function makaleDetay($id){

        $makale = Makale::find($id);

        return view('makale',compact('makale'));
    }
    public function yeniMakale()
    {
        return view('home');
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
