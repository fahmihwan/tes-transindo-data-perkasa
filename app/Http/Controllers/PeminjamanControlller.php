<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanControlller extends Controller
{
    public function cek_mobil()
    {
        return view('pages.peminjaman.cek_mobil');
    }

    public function get_mobil_schedule(Request $request)
    {

        // $datas = Mobil::whereRelation('peminjaman')->get();
        $datas = Mobil::latest()->get();
        return view('pages.peminjaman.list-schedule-mobil', [
            'datas' => $datas
        ]);

        // return Peminjaman::whereNotBetween('votes', [$request->tanggal_mulai, $request->tanggal_selesai])->get();
    }
    public function list_is_rented()
    {
        $datas = Mobil::with('peminjamans')->latest()->get();;
        return view(
            'pages.peminjaman.is-rented',
            [
                'datas' => $datas
            ]
        );
    }

    public function store(Request $request, $id)
    {

        // $startDate = strtotime($request->tanggal_mulai);
        // $endDate = strtotime($request->tanggal_selesai);

        // if ($startDate <= $endDate) {
        //     $datediff = $endDate - $startDate;
        //     return floor($datediff / (60 * 60 * 24));
        // } else {
        //     return redirect()->back();
        // }
        // $get_tarif = Mobil::where('id', $id)->first()->tarif;

        Peminjaman::create([
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'mobil_id' => $id,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->back();
    }
}
