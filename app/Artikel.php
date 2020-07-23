<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul', 'cuplikan', 'isi', 'gambar', 'waktu_artikel'];

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
