<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MenuController extends Controller
{
    //
   public function menuGet(){
    $query=DB::table('urunler')->get();
    $category=DB::table('kategoriler')->get();

    return view('Front.menuList',compact(['query','category']));


   }
}
