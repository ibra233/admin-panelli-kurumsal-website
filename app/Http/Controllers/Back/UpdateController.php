<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
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
        $imageName = DB::table('urunler')->select('resim')->where('urun_id', $id)->first();
        if ($request->hasFile('image')) {

            unlink(public_path("images/") . $imageName->resim);
            $imageName->resim = uniqid() . "" . $request->image->getClientOriginalName();
            $uploadad = $request->image->move(public_path('images'), $imageName->resim);
        }
        $query = DB::table('urunler')->where('urun_id', $id)
            ->update(
                [
                    'urun_ad' => $request->name,
                    'urun_aciklama' => $request->description,
                    'urun_fiyat' => $request->preise,
                    'kategori' => $request->category,
                    'resim' => $imageName->resim,
                ]
            );


        return back()->with('Succes', 'Güncelleme işlemi gerçekleşti');
    }

    public function updateCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:5'
        ]);
        $imageName = DB::table('kategoriler')->select('resim')->where('kategori_id', $id)->first();
        if ($request->hasFile('image')) {

            unlink(public_path("images/") . $imageName->resim);
            $imageName->resim = uniqid() . "" . $request->image->getClientOriginalName();
            $uploadad = $request->image->move(public_path('images'), $imageName->resim);
        }
        $query = DB::table('kategoriler')->where('kategori_id', $id)
            ->update([
                'kategori_ad' => $request->name,
                'kategori_aciklama' => $request->description,
                'resim' => $imageName->resim
            ]);

        return back()->with('Succes', 'Güncelleme işlemi gerçekleşti');
    }

    public function workTimeUpdate(Request $request)
    {
        $request->validate([
            'haftaici_baslangic' => 'required',
            'haftaici_bitis' => 'required',
            'cumartesi_baslangic' => 'required',
            'cumartesi_bitis' => 'required',
            'pazar_baslangic' => 'required',
            'pazar_bitis' => 'required'
        ]);

        DB::table('calisma_saat')->update($request->except(['_token', '_method']));

        return back()->with('Succes', 'Çalışma saatleri güncellendi');
    }

    public function contactUpdate(Request $request)
    {
        $request->validate(([
            'telefon1' => 'required',
            'telefon2' => 'required',
            'web_adres' => 'required',
            'mail' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'instagram' => 'required'
        ]));
        DB::table('iletisim')->update($request->except(['_token', '_method']));

        return back()->with('Succes', 'İletişim bilgileri güncellendi');
    }

    public function updateAboutUs(Request $request)
    {

        $request->validate([
            'resim' =>      'image',
            'paragraf1' => 'required',
            'paragraf2' => 'required',
            'paragraf3' => 'required'
        ]);
        $imageName = DB::table('hakkimizda')->select('resim')->first();
        if ($request->hasFile('resim')) {

            unlink(public_path("images/") . $imageName->resim);
            $imageName->resim = uniqid() . "" . $request->resim->getClientOriginalName();
            $uploadad = $request->resim->move(public_path('images'), $imageName->resim);
        }

        DB::table('hakkimizda')->update([
            'resim' => $imageName->resim,
            'paragraf1' => $request->paragraf1,
            'paragraf2' => $request->paragraf2,
            'paragraf3' => $request->paragraf3
        ]);

        return back()->with('succes', 'Hakkımızda başarıyla güncellendi');
    }

    public function updateVision(Request $request)
    {

        $request->validate([
            'resim' =>      'image',
            'paragraf' => 'required'
        ]);
        $imageName = DB::table('vizyon')->select('resim')->first();
        if ($request->hasFile('resim')) {

            unlink(public_path("images/") . $imageName->resim);
            $imageName->resim = uniqid() . "" . $request->resim->getClientOriginalName();
            $uploadad = $request->resim->move(public_path('images'), $imageName->resim);
        }

        DB::table('vizyon')->update([
            'resim' => $imageName->resim,
            'paragraf' => $request->paragraf
        ]);

        return back()->with('succes', 'Vizyonumuz başarıyla güncellendi');
    }
    public function updateMission(Request $request)
    {

        $request->validate([
            'resim' =>      'image',
            'paragraf' => 'required'
        ]);
        $imageName = DB::table('misyon')->select('resim')->first();
        if ($request->hasFile('resim')) {

            unlink(public_path("images/") . $imageName->resim);
            $imageName->resim = uniqid() . "" . $request->resim->getClientOriginalName();
            $uploadad = $request->resim->move(public_path('images'), $imageName->resim);
        }

        DB::table('misyon')->update([
            'resim' => $imageName->resim,
            'paragraf' => $request->paragraf
        ]);

        return back()->with('succes', 'Misyonumuz başarıyla güncellendi');
    }
}
