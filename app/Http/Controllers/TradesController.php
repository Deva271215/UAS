<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradesController extends Controller
{

    // menampilkan data pada tabel Trades ke page trade
    public function index()
    {
        $data_trades = \App\Trades::all();
        return view('trades.index', ['data_trades' => $data_trades]);
    }
}
