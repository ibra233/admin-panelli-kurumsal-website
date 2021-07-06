<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //
    public function productList()
    {


        $query = DB::table('urunler')->join('kategoriler', 'urunler.kategori', '=', 'kategoriler.kategori_id')->simplePaginate(5);
        $data = DB::table('kategoriler')->select(['kategori_id', 'kategori_ad'])->get();


        return view('Back.productList', compact(['query', 'data']));
    }
    public function categoryList()
    {


        $query = DB::table('kategoriler')->simplePaginate(5);



        return view('Back.categoryList', compact('query'));
    }
    public function reservationList()
    {
        $query = DB::table('rezervasyonlar')->where('rezervasyon_durum', 1)->simplePaginate(6);

        return view('Back.reservationList', compact(['query']));
    }

    public function reservationAcceptedList()
    {
        $query = DB::table('rezervasyonlar')->where('rezervasyon_durum', 0)->orderBy('rezervasyon_tarih', 'desc')
            ->simplePaginate(7);

        return view('Back.reservationAcceptedList', compact('query'));
    }
    public function homeShow()
    {
        $query = DB::table('calisma_saat')->first();
        $queryContact = DB::table('iletisim')->first();
        return view('Back.home', compact(['query', 'queryContact']));
    }
    public function imageGalery()
    {
        $query = DB::table('resimgaleri')->get();

        return view('Back.imageGalery', compact('query'));
    }

    public function videoGalery()
    {
        $query = DB::table('videogaleri')->get();

        return view('Back.videoGalery', compact('query'));
    }

    public function aboutUs()
    {

        $query = DB::table('hakkimizda')->first();

        return view('Back.aboutUs', compact('query'));
    }

    public function vision()
    {

        $query = DB::table('vizyon')->first();

        return view('Back.vision', compact('query'));
    }
    public function mission()
    {

        $query = DB::table('misyon')->first();

        return view('Back.mission', compact('query'));
    }
    public function jobApplication()
    {

        $query = DB::table('isbasvuru')->simplePaginate(5);

        return view('Back.jobApplication', compact('query'));
    }
    public function customerMessage()
    {
        $query = DB::table('musterimesaj')->simplePaginate(5);

        return view('Back.customerMessage', compact('query'));
    }
}
