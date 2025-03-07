<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Article::latest()->take(4)->get();

        // Ambil 6 galeri terbaru (jika kurang dari 6, ambil semua)
        $latestGalleries = Gallery::latest()->take(6)->get();

        // Kirim kedua variabel ke view
        return view('welcome', compact('latestNews', 'latestGalleries'));
    }
}
