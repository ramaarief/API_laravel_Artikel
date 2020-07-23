<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Artikel;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $artikel = Artikel::all();

        $kategori = Kategori::when($request->search, function ($query) use ($request) {
            $query->join('artikel', 'kategori.artikel_id', '=', 'artikel.id')
                ->where('artikel.judul', 'LIKE', '%' . $request->search . '%')
                ->select('artikel.*', 'artikel.judul AS artikel_judul');
        })->paginate(10);

        return view('kategori.index', compact('kategori', 'artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = Artikel::all();
        return view('kategori.create', compact('artikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create([
            'artikel_id' => $request->artikel_id,
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::all();
        $kategori = Kategori::find($id);

        return view('kategori.edit', compact('kategori', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->artikel_id = $request['artikel_id'];
        $kategori->nama_kategori = $request['nama_kategori'];

        $kategori->update();

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::whereId($id)->delete();
        return redirect('/kategori');
    }
}
