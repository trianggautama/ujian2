<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['nama','tipe', 'jumlah', 'harga'];
}
