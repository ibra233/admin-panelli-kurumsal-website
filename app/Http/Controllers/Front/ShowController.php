<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function showImageGalery()
    {
        $query = DB::table('resimgaleri')->simplePaginate(12);
        return view('Front.imageGalery', compact('query'));
    }

    public function showVideoGalery()
    {
        $query = DB::table('videogaleri')->simplePaginate(12);
        return view('Front.videoGalery', compact('query'));
    }

    public function showAboutUs()
    {

        $query = DB::table('hakkimizda')->first();
        return view('Front.aboutus', compact('query'));
    }

    public function showVision(){
        $query=DB::table('vizyon')->first();

        return view('Front.vision',compact('query'));
    }

    public function showMission(){
        $query=DB::Table('misyon')->first();
        return view('Front.mission',compact('query'));
    }
    public function showComment(){
$query=DB::table('yorumlar')->get();
        return view('Front.comment',compact('query'));
    }
}
