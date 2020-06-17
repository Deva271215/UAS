<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // menampilkan data database banner dan proyek pada landing page
    public function index()
    {
        $data_proyek = \App\Proyek::all();
        $data_banner = \App\Banner::all();
        return view('index', ['data_proyek' => $data_proyek, 'data_banner' => $data_banner]);
    }
}
