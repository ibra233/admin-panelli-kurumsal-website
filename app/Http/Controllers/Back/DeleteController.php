<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class deleteController extends Controller
{
    //
    public function deleteProduct($id){

        $imageQuery=DB::table('urunler')->select('resim')->where('urun_id',$id)->first();
        unlink(public_path("images/").$imageQuery->resim);

        $query=DB::table('urunler')->where('urun_id',$id)->delete();


            return back()->with('Succes','Silme işlemi gerçekleşti');


    }
    public function deleteCategory($id){



        $query=DB::table('kategoriler')->where('kategori_id',$id)->delete();

        return back()->with('Succes','Silme işlemi gerçekleşti');

    }

    public function deleteImageGalery($id){
        $imageQuery=DB::table('resimgaleri')->select('resim')->where('id',$id)->first();
        unlink(public_path("images/").$imageQuery->resim);
        DB::table('resimgaleri')->where('id',$id)->delete();
        return back()->with('succes','Resim başarıyla silindi');
    }
    public function deleteVideoGalery($id){
        $imageQuery=DB::table('videogaleri')->select('video')->where('id',$id)->first();
        unlink(public_path("images/").$imageQuery->video);
        DB::table('videogaleri')->where('id',$id)->delete();
        return back()->with('succes','Video başarıyla silindi');
    }
}

