<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Artikel;
use App\Kategori;

class ApiController extends Controller
{
    public function showDaftar()
    {
        $artikel = DB::table('artikel')->select('judul', 'cuplikan', 'waktu_artikel')->get();
        return response()->json($artikel);
    }

    public function showDetail()
    {
        $artikel = DB::table('artikel')->select('judul', 'isi', 'gambar', 'waktu_artikel')->get();
        return response()->json($artikel);
    }

    public function showKategori()
    {
        $kategori = DB::table('kategori')
            ->join('artikel', 'kategori.artikel_id', '=', 'artikel.id')
            ->select('kategori.id', 'artikel.judul', 'nama_kategori')
            ->get();

        return response()->json($kategori);
    }

    public function search(Request $request)
    {
        $artikel = Artikel::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'LIKE', '%' . $request->search . '%')
                ->select('judul', 'cuplikan', 'waktu_artikel');
        })->get();

        return response()->json($artikel);
    }

    public function filter(Request $request)
    {
        $kategori = Kategori::all();

        $artikel = Artikel::when($request->search, function ($query) use ($request) {
            $query->join('kategori', 'artikel.id', '=', 'kategori.artikel_id')
                ->where('kategori.nama_kategori', 'LIKE', '%' . $request->search . '%')
                ->select('judul', 'cuplikan', 'waktu_artikel');
        })->get();

        return response()->json($artikel);
    }
}
