<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = ['NIS','nama', 'alamat', 'ortu', 'no_hp'];
}
