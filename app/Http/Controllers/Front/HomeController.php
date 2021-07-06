<?php

namespace App\Http\Controllers\Front;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function get(){
        $categories=DB::table('kategoriler')->get();
        $query=DB::table('hakkimizda')->select('paragraf1')->first();

        return view('Front.index',compact(['categories','query']));
    }

    public function reservation(Request $request){
        $validated=$request->validate([
            'adsoyad' => 'required',
            'eposta' => 'required|email',
            'telefon' => 'required',
            'gun' => 'required',
            'saat' => 'required'
        ]);
 $time=new Carbon($request->gun.' '.$request->saat);
        $query=DB::table('rezervasyonlar')->insert([
            'ad_soyad' => $request->adsoyad,
            'email' => $request->eposta,
            'telefon_no' =>$request->telefon,
            'rezervasyon_tarih'=>$time,
            'rezervasyon_durum' =>1,
            'mesaj' =>$request->mesaj
        ]);
            if($query){
        return response()->json("succes");
            }else{
                return response()->json("fail");
            }
    }
}
