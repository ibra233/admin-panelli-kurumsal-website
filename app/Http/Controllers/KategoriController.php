<?php

namespace App\Http\Controllers;

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
                'description' => 'required|min:5'
            ]
        );
        $insert = DB::table('kategoriler')->insert(
            [
                'kategori_ad' => $request->name,
                'kategori_aciklama' => $request->description
            ]
        );

        if ($insert) {
            return redirect('kategoriekle')->with('succes', 'Kategori ekleme işlemi başarılı');
        } else {
            return redirect('kategoriekle')->with('fail', 'Kategori ekleme başarılı');
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
                return redirect('ürünekle')->with('succes', 'Ürün ekleme işlemi başarılı');
            } else {
                return redirect('ürünekle')->with('fail', 'Ürün ekleme başarısız');
            }
        } else {
            return redirect('ürünekle')->with('fail', 'Resim  yükleme başarısız');
        }
    }

    public function productShow()
    {

        $query = DB::table('kategoriler')->select(['kategori_id', 'kategori_ad'])->get();
        $data = [
            'data' => $query
        ];
        return view('addProduct', $data);
    }
}
