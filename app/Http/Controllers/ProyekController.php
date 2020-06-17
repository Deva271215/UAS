<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyekController extends Controller
{
    // menampilkan data pada database pryek pada page proyek
    public function index()
    {
        $data_proyek = \App\Proyek::all();
        return view('proyek.index', ['data_proyek' => $data_proyek]);
    }

    // menampilkan data pada database proyek untuk ditampilkan pada page detail sesuai dengan id yang dipilih pada page proyek.
    public function detail($id)
    {
        $proyek = \App\Proyek::find($id);
        return view('proyek.detail', ['proyek' => $proyek]);
    }

    // menampilkan data pada page form pembelian yang valuenya adalah berdasarkan id yang dipilih
    public function form($id)
    {
        $proyek = \App\Proyek::find($id);
        return view('proyek.form', ['proyek' => $proyek]);
    }

    // menampilkan data pada form checkout berdasarkan id yang dioper dari page proyek yang didapat dari tabel database proyek
    public function form_checkout($id)
    {
        $proyek = \App\Proyek::find($id);
        return view('proyek.form_checkout', ['proyek' => $proyek]);
    }

    // menampilkan page syarat ketentuan
    public function syarat_ketentuan()
    {
        return view('proyek.syarat_ketentuan');
    }

    // menampilkan page tentang
    public function about()
    {
        return view('proyek.about');
    }

    // menampilkan page time_line
    public function time_line($kode)
    {
        $data_timeline = \App\Reporting::where('kode', 'LIKE', '%' . $kode . '%')->get();
        return view('proyek/time_line', ['data_timeline' => $data_timeline]);
    }
}
