<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    //
    public function updateProduct(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:5',
            'preise' => 'required',
            'category' => 'required',
            'image' => 'image'
        ]);
        if ($request->hasFile('image')) {
            $imageQuery = DB::table('urunler')->select('resim')->where('urun_id', $id)->first();
            unlink(public_path("images/") . $imageQuery->resim);
            $imageName = uniqid() . "" . $request->image->getClientOriginalName();
            $uplodad = $request->image->move(public_path('images'), $imageName);
            $query = DB::table('urunler')->where('urun_id', $id)
                ->update(
                    [
                        'urun_ad' => $request->name,
                        'urun_aciklama' => $request->description,
                        'urun_fiyat' => $request->preise,
                        'kategori' => $request->category,
                        'resim' => $imageName,
                    ]
                );
        } else {
            $query = DB::table('urunler')->where('urun_id', $id)
                ->update(
                    [
                        'urun_ad' => $request->name,
                        'urun_aciklama' => $request->description,
                        'urun_fiyat' => $request->preise,
                        'kategori' => $request->category

                    ]
                );
        }
        if ($query) {
            return redirect('ürünliste')->with('succes', 'Güncelleme işlemi başarıyla gerçekleşti');
        } else {
            return redirect('ürünlist')->with('fail', 'Güncelleme yapılamadı');
        }
    }

    public function updateCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:5'
        ]);
        $query = DB::table('kategoriler')->where('kategori_id', $id)
            ->update([
                'kategori_ad' => $request->name,
                'kategori_aciklama' => $request->description
            ]);
        if ($query) {
            return redirect('kategoriliste')->with('succes', 'Kategori güncelleme işlemi başarıyla gerçekleşti');
        } else {
            return redirect('kategoriliste')->with('fail', 'Kategori güncelleme başarısız');
        }
    }
}
