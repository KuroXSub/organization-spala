<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\AboutOrganization;
use App\Models\Division;
use App\Models\ImageDynamic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Article::latest()->take(4)->get();

        // Ambil 6 galeri terbaru (jika kurang dari 6, ambil semua)
        $latestGalleries = Gallery::latest()->take(6)->get();

        // Data untuk welcome page
        $welcomeTentang = AboutOrganization::where('slug', 'welcome-tentang')->first();
        $welcomeImage = ImageDynamic::where('slug', 'welcome-tentang')->first();

        // Kirim kedua variabel ke view
        return view('welcome', compact('welcomeTentang', 'welcomeImage', 'latestNews', 'latestGalleries'));
    }

    public function about()
    {
        // Data untuk about page
        $tentangFull = AboutOrganization::where('slug', 'tentang-full')->first();
        $tentangTujuan = AboutOrganization::where('slug', 'tentang-tujuan')->first();
        $tentangKegiatan = AboutOrganization::where('slug', 'tentang-kegiatan')->first();
        $aboutImage1 = ImageDynamic::where('slug', 'tentang-satu')->first();
        $aboutImage2 = ImageDynamic::where('slug', 'tentang-dua')->first();

        return view('about', compact('tentangFull', 'tentangTujuan', 'tentangKegiatan', 'aboutImage1', 'aboutImage2'));
    }

    public function organization()
    {
        // Data untuk organization page
        $visi = AboutOrganization::where('slug', 'organisasi-visi')->first();
        $misi = AboutOrganization::where('slug', 'organisasi-misi')->first();
        $maksud = AboutOrganization::where('slug', 'organisasi-maksud')->first();
        $divisions = Division::all();
        $logo = ImageDynamic::where('slug', 'organisasi-logo')->first();
        $struktur = ImageDynamic::where('slug', 'organisasi-struktur')->first();

        return view('organization', compact('visi', 'misi', 'maksud', 'divisions', 'logo', 'struktur'));
    }
}
