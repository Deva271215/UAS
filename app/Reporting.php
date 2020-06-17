<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    protected $table = 'time_line';
    protected $fillable = ['image', 'kode', 'dr', 'description'];
}
