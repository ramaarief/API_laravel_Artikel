<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul', 'cuplikan', 'isi', 'gambar', 'waktu_artikel'];
}
