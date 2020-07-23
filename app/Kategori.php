<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artikel;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['artikel_id', 'nama_kategori'];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}
