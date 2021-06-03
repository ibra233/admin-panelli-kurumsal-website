<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //
    public function productList()
    {


        $query = DB::table('urunler')->simplePaginate(5);
        $data = DB::table('kategoriler')->select(['kategori_id', 'kategori_ad'])->get();
        
        if (session()->has('succes')) {
            $succes=session('succes');
            return view('productList', compact(['query','data','succes']));
        } else if (session()->has('fail')) {
            $fail=session('fail');
            return view('productList', compact(['query','data','fail']));
        }else{
            return view('productList', compact(['query','data']));
        }



        
    }
}
