<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $artikel = Artikel::count();
        $kategori = Kategori::count();
        $user = User::count();

        return view('index', compact('artikel', 'kategori', 'user'));
    }
}
