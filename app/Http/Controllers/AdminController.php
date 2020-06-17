<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use App\Mitra;
use App\Banner;
use App\Reporting;

class AdminController extends Controller
{

    // Untuk menampilkan data pada landing page 
    public function showindex(Request $request)
    {
        if ($request->has('cari')) {
            $data_proyek = Proyek::where('cr', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_proyek = Proyek::all();
        }
        return view('admin.index', ['data_proyek' => $data_proyek]);
    }


    // unutk membuat data bibit ternak baru
    public function create(Request $request)
    {
        $this->validate($request, [
            'cr' => 'required',
            'gambar' => 'nullable',
            'nama_proyek' => 'required',
            'harga' => 'required',
            'bibit_stok' => 'required',
            'bibit_tersisa' => 'required',
            'penerima' => 'required',
            'alamat' => 'required',
            'durasi' => 'required',
            'bibit_tersisa' => 'required',
        ]);
        Proyek::create($request->all());
        return redirect('/admin')->with('sukses', 'Data berhasil di Input');
    }

    // unutk menampilkan data dengan id yang dipilih
    public function edit($id)
    {
        $proyek = Proyek::find($id);
        return view('admin/edit', ['proyek' => $proyek]);
    }

    // unutk memperbaharui data yang dipilih dengan function edit
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'gambar' => 'max:1024'
        ]);
        $trade = Proyek::find($id);
        $trade->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('public/img/', $request->file('gambar')->getClientOriginalName());
            $trade->gambar = $request->file('gambar')->getClientOriginalName();
            $trade->save();
        }
        return redirect('/admin')->with('sukses', 'Data berhasil di perbaharui');
    }

    // untuk menghapus data yang dipilih 
    public function delete($id)
    {
        $proyek = Proyek::find($id);
        $proyek->delete();
        return redirect('/admin')->with('sukses', 'Data berhasil dihapus');
    }

    // POST

    // untuk menampilkan data pada page banner
    public function banner()
    {
        $data_banner = Banner::all();
        return view('admin.post', ['data_banner' => $data_banner]);
    }

    // untuk membuat banner baru
    public function create_banner(Request $request)
    {
        // dd($request->all());

        $banner = Banner::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('public/img/banner/', $request->file('gambar')->getClientOriginalName());
            $banner->gambar = $request->file('gambar')->getClientOriginalName();
            $banner->save();
        }
        return redirect('/admin/banner')->with('sukses', 'Data berhasil di perbaharui');
    }

    // untuk menampilkan banner yang dipilih sebelum diperbaharui
    public function edit_banner($id)
    {
        $banner = Banner::find($id);
        return view('admin/edit_banner', ['banner' => $banner]);
    }

    // untuk memperbaharui banner
    public function update_banner(Request $request, $id)
    {
        // dd($request->all());
        $banner = Banner::find($id);
        $banner->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('public/img/banner/', $request->file('gambar')->getClientOriginalName());
            $banner->gambar = $request->file('gambar')->getClientOriginalName();
            $banner->save();
        }
        return redirect('/admin/banner')->with('sukses', 'Data berhasil di perbaharui');
    }

    public function delete_banner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect('/admin/banner')->with('sukses', 'Data berhasil dihapus');
    }

    // TIME LINE
    public function time_line()
    {
        $data_timeline = Reporting::all();
        return view('admin.post_time_line', ['data_timeline' => $data_timeline]);
    }
    public function create_timeline(Request $request)
    {
        Reporting::create($request->all());
        return redirect('/admin/timeline-desk')->with('sukses', 'Data berhasil di Input');
    }
    public function delete_timeline($id)
    {
        $timeline = Reporting::find($id);
        $timeline->delete();
        return redirect('/admin/timeline-desk')->with('sukses', 'Data berhasil dihapus');
    }
    public function edit_timeline($id)
    {
        $timeline = Reporting::find($id);
        return view('admin/edit_timeline', ['timeline' => $timeline]);
    }

    public function update_timeline(Request $request, $id)
    {
        // dd($request->all());
        $timeline = Reporting::find($id);
        $timeline->update($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('img/timeline/', $request->file('image')->getClientOriginalName());
            $timeline->image = $request->file('image')->getClientOriginalName();
            $timeline->save();
        }
        return redirect('/admin/timeline-desk')->with('sukses', 'Data berhasil di perbaharui');
    }

    // Mitra
    public function mitra()
    {
        $data_mitra = Mitra::all();
        return view('admin.mitra', ['data_mitra' => $data_mitra]);
    }
    public function create_mitra(Request $request)
    {
        $mitra = Mitra::create($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('img/mitra/', $request->file('image')->getClientOriginalName());
            $mitra->image = $request->file('image')->getClientOriginalName();
            $mitra->save();
        }
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil di Input');
    }
    public function delete_mitra($id)
    {
        $mitra = Mitra::find($id);
        $mitra->delete();
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil dihapus');
    }
    public function edit_mitra($id)
    {
        $mitra = Mitra::find($id);
        return view('admin/edit_mitra', ['mitra' => $mitra]);
    }

    public function update_mitra(Request $request, $id)
    {
        // dd($request->all());
        $mitra = Mitra::find($id);
        $mitra->update($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('img/mitra/', $request->file('image')->getClientOriginalName());
            $mitra->image = $request->file('image')->getClientOriginalName();
            $mitra->save();
        }
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil di perbaharui');
    }
}
