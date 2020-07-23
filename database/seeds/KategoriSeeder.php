<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listKategori = [
            ['artikel_id' => '1',   'nama_kategori' => 'kesehatan'],
            ['artikel_id' => '2',   'nama_kategori' => 'pendidikan'],
            ['artikel_id' => '3',   'nama_kategori' => 'kesehatan'],

            ['artikel_id' => '4',   'nama_kategori' => 'ilmiah'],
            ['artikel_id' => '4',   'nama_kategori' => 'kesehatan'],

            ['artikel_id' => '5',   'nama_kategori' => 'lingkungan hidup'],

            ['artikel_id' => '6',   'nama_kategori' => 'ilmiah'],
            ['artikel_id' => '6',   'nama_kategori' => 'kesehatan'],

            ['artikel_id' => '7',   'nama_kategori' => 'lingkungan hidup'],
            ['artikel_id' => '8',   'nama_kategori' => 'pendidikan'],
            ['artikel_id' => '9',   'nama_kategori' => 'kesehatan'],
            ['artikel_id' => '10',  'nama_kategori' => 'kesehatan']
        ];

        foreach ($listKategori as $kategori) {
            Kategori::create($kategori);
        }
    }
}
