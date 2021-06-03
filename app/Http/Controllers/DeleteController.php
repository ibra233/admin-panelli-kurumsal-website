<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class deleteController extends Controller
{
    //
    public function deleteProduct($id){

        $imageQuery=DB::table('urunler')->select('resim')->where('urun_id',$id)->first();
        unlink(public_path("images/").$imageQuery->resim);
        
        $query=DB::table('urunler')->where('urun_id',$id)->delete();
        if($query){
return redirect('ürünliste')->with('succes','Silme işlemi başarıyla gerçekleşti');
        }else{
            return redirect('ürünliste')->with('fail','Silme işlemi gerçekleşmedi');
        }
        
    }
    public function deleteCategory($id){

     
        
        $query=DB::table('kategoriler')->where('kategori_id',$id)->delete();
        if($query){
return redirect('kategoriliste')->with('succes','Silme işlemi başarıyla gerçekleşti');
        }else{
            return redirect('kategoriliste')->with('fail','Silme işlemi gerçekleşmedi');
        }
        
    }
}

