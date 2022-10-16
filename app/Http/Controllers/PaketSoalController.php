<?php

namespace App\Http\Controllers;

use App\Models\PaketSoal;
use App\Models\soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaketSoalController extends Controller
{
    //
    public function delete($paket_id)
    {
        # code...
        $paket = PaketSoal::where('id', $paket_id)->where('user_id', Auth::user()->id)->first();
        if (!$paket) {
            # code...
            return redirect()->back()->with('error', 'Paket Tidak tersedia, harap menghubungi admin');
        }
        $paket->is_deleted = 1;
        $paket->save();
        return redirect()->back()->with('success', 'Paket berhasil dihapus');

    }
    public function changePublic($paket_id)
    {
        # code...
        $paket = PaketSoal::where('id', $paket_id)->where('user_id', Auth::user()->id)->first();
        if (!$paket) {
            # code...
            return redirect()->back()->with('error', 'Paket Tidak tersedia, harap menghubungi admin');
        }
        if ($paket->is_public == 1) {
            # code...
            $paket->is_public = 0;
        } else {
            # code...
            $paket->is_public = 1;
        }
        
        $paket->save();

        return redirect()->back()->with('success', 'Paket berhasil diedit');
    }
    //
    public function createPaket()
    {
        return view('paket.create',[
            'title' => 'Buat Paket',
        ]);

    }
    public function store(Request $req)
    {
        $cek = PaketSoal::where('name', $req->name)->first();
        if ($cek) {
            return redirect()->back()->with('error', 'Nama paket sudah ada, harap menggunakan nama yang berbeda');
            # code...
        }
        $paket = new PaketSoal();
        $paket->user_id = Auth::user()->id;
        $paket->name = $req->name;
        $paket->is_public = $req->is_public;
        $paket->save();

        return redirect()->route('list_paket')->with('success', 'Paket berhasil dibuat');
    }
    public function edit($paket_id)
    {
        $paket = PaketSoal::where('id', $paket_id)->where('is_deleted', 0)->where('user_id', Auth::user()->id)->first();
        if (!$paket) {
            # code...
            return redirect()->back()->with('error', 'Paket Tidak tersedia, harap menghubungi admin');
        }
        $soal = soal::where('paket_id', $paket_id)->where('is_deleted', 0)->get();
        return view('paket.edit',[
            'title' => 'Buat Paket',
            'paket' => $paket,
            'soal' => $soal,
        ]);
    }
    
}
