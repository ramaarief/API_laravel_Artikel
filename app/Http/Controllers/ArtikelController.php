<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $artikel = Artikel::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'LIKE', '%' . $request->search . '%');
        })->paginate(5);

        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambarName = 'artikel-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move('asset/images', $gambarName);

        Artikel::create([
            'judul' => $request->judul,
            'cuplikan' => $request->cuplikan,
            'isi' => $request->isi,
            'gambar' => $gambarName,
            'waktu_artikel' => $request->waktu
        ]);

        return redirect('/artikel');
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
        $artikel = Artikel::find($id);

        return view('artikel.edit', compact('artikel'));
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
        $artikel = Artikel::find($id);
        $artikel->judul = $request['judul'];
        $artikel->cuplikan = $request['cuplikan'];
        $artikel->isi = $request['isi'];

        if ($request->gambar) {
            $gambarName = 'artikel-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->move('asset/images', $gambarName);
            $artikel->gambar = $gambarName;
        }

        $artikel->waktu_artikel = $request['waktu'];

        $artikel->update();

        return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::whereId($id)->delete();
        return redirect('/artikel');
    }
}
