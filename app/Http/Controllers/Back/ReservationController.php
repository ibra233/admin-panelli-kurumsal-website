<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\RejectionMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function reservationAccept($reservationId)
    {
        $query = DB::table('rezervasyonlar')->where('rezervasyon_id', $reservationId)->first();


        Mail::to($query->email)->send(new SendMail($query));

        $queryUpdate = DB::table('rezervasyonlar')->where('rezervasyon_id', $reservationId)
            ->update([
                'rezervasyon_durum' => 0
            ]);
        return back()->with('succes', 'Mail Başarıyla Gönderildi');
    }
    public function reservationRejection($reservationId, Request $request)
    {
        $query=DB::table('rezervasyonlar')->where('rezervasyon_id',$reservationId)->first();

        $data=[
            'query' => $query,
            'message' =>$request->reason
        ];
        Mail::to($query->email)->send(new RejectionMail($data));

        $queryUpdate=DB::table('rezervasyonlar')->where('rezervasyon_id',$reservationId)->update([
            'rezervasyon_durum' =>2
        ]);
        return back()->with('succes', 'Mail Başarıyla Gönderildi');

    }
}
