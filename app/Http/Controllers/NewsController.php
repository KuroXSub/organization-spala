<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();

        // Pencarian berdasarkan judul
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('year') && $request->year != '') {
            $query->whereYear('created_at', $request->year);
        }

        $news = $query->latest()->paginate(8);

        return view('news.index', compact('news'));
    }

    // Menampilkan detail berita
    public function show(Article $news)
    {
        return view('news.show', compact('news'));
    }
}
