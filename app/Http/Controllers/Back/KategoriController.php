<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    //
    public function addCategory(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|min:5',
                'description' => 'required|min:5',
                'image' => 'required|image'
            ]
        );
        $imageName = uniqid() . "" . $request->image->getClientOriginalName();
        $upload = $request->image->move(public_path('images'), $imageName);
        if ($upload) {
            $insert = DB::table('kategoriler')->insert(
                [
                    'kategori_ad' => $request->name,
                    'kategori_aciklama' => $request->description,
                    'resim' => $imageName

                ]
            );

            if ($insert) {
                return back()->with('succes', 'Kategori ekleme başarılı');
            } else
                return back()->with('fail', 'Kategori ekleme başarısız');
        }
    }

    public function addProduct(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|min:5',
                'description' => 'required|min:5',
                'price' => 'required',
                'category' => 'required',
                'image' => 'required|image'
            ]
        );
        $imageName = uniqid() . "" . $request->image->getClientOriginalName();
        $upload = $request->image->move(public_path('images'), $imageName);
        if ($upload) {
            $insert = DB::table('urunler')->insert(
                [
                    'urun_ad' => $request->name,
                    'urun_aciklama' => $request->description,
                    'urun_fiyat' => $request->price,
                    'kategori' => $request->category,
                    'resim' => $imageName

                ]
            );

            if ($insert) {
                return back()->with('succes', 'Ürün ekleme işlemi başarılı');
            } else {
                return back()->with('fail', 'Ürün ekleme başarısız');
            }
        } else {
            return back()->with('fail', 'Resim  yükleme başarısız');
        }
    }

    public function productShow()
    {

        $query = DB::table('kategoriler')->select(['kategori_id', 'kategori_ad'])->get();
        $data = [
            'data' => $query
        ];
        return view('Back.addProduct', $data);
    }

    public function imageGaleryAdd(Request $request)
    {

        $request->validate([
            'resim' => 'required|image'
        ]);
        $imageName = uniqid() . "" . $request->resim->getClientOriginalName();
        $request->resim->move(public_path('images'), $imageName);
        DB::table('resimgaleri')->insert([
            'resim' => $imageName
        ]);
        return back()->with('succes', 'Resim Eklendi');
    }
    public function videoGaleryAdd(Request $request)
    {

        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt',
            'videoresim' =>'required|image'
        ]);
        $videoName = uniqid() . "" . $request->video->getClientOriginalName();
        $imageName=uniqid() ."".$request->videoresim->getClientOriginalName();
        $request->videoresim->move(public_path('images'),$imageName);
        $request->video->move(public_path('images'), $videoName);
        DB::table('videogaleri')->insert([
            'video' => $videoName,
            'videoresmi' =>$imageName
        ]);
        return back()->with('succes', 'Video Eklendi');
    }
}
