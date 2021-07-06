<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    //

    public function commentAdd(Request $request)
    {

        $request->validate([
            'adsoyad' => 'required',
            'email' => 'required|email',
            'mesaj' => 'required'
        ]);

        DB::table('yorumlar')->insert([
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'mesaj' => $request->mesaj
        ]);

        return back()->with('success', 'Formunuz başarıyla gönderilmiştir teşekürler');
    }
    public function customerMessage(Request $request)
    {

        $request->validate([
            'adsoyad' => 'required',
            'email' => 'required|email',
            'konu' => 'required',
            'telefon' => 'required',
            'mesaj' => 'required'
        ]);

        DB::table('musterimesaj')->insert([
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'telefon' => $request->telefon,
            'konu' => $request->konu,
            'mesaj' => $request->mesaj
        ]);

        return back()->with('success', 'Mesajınız başarıyla iletildi');
    }

    public function jobApplication(Request $request)
    {
        $request->validate([
            'adsoyad' => 'required',
            'email' => 'required|email',
            'telefon' => 'required',
            'cv' => 'required|mimes:pdf,xls,doc'
        ]);

        $cvname=uniqid() ."".$request->cv->getClientOriginalName();
        $request->cv->move(public_path('images'), $cvname);
        DB::table('isbasvuru')->insert([
            'adsoyad' =>$request->adsoyad,
            'email' =>$request->email,
            'telefon' =>$request->telefon,
            'cv' => $cvname
        ]);
        return back()->with('success','İş başvurunuz alındı kısa sürede geri dönüş yapılacak');
    }
}
