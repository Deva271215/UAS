<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $fillable = ['cr', 'gambar', 'nama_proyek', 'dana_dibutuhkan', 'dana_terkumpul', 'harga', 'bibit_stok', 'bibit_sold', 'bibit_tersisa', 'persen', 'roi', 'durasi', 'penerima', 'alamat', 'link_rab'];
}
