<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\car;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function index()
    {
        $cars = car::all();
        $paketWisata = PaketWisata::all();
        $blogs = blog::latest()->take(3)->get();

        return view('home', compact('cars', 'paketWisata', 'blogs'));
    }
    
    
    public function bloglist()
    {
        $blogs = Blog::latest()->take(3)->get();

        return view('artikel-list', compact('blogs'));
    }

    public function show($slug)
    {
        // Ambil ID dari slug (misal: toyota-avanza-12)
        $id = (int) str()->afterLast($slug, '-');

        // Cari data berdasarkan ID
        $car = Car::findOrFail($id);

        return view('armada', compact('car'));
    }

    public function paket($slug)
    {
        // Ambil ID dari slug (misal: toyota-avanza-12)
        $id = (int) str()->afterLast($slug, '-');

        // Cari data berdasarkan ID
        $paket = PaketWisata::findOrFail($id);

        return view('paket', compact('paket'));
    }

    public function blog($slug)
    {
        // Ambil ID dari slug (misal: toyota-avanza-12)
        $id = (int) str()->afterLast($slug, '-');

        // Cari data berdasarkan ID
        $blog = Blog::findOrFail($id);
        $blogs = Blog::latest()->take(5)->get();

        return view('artikel', compact('blog','blogs'));
    }
}
