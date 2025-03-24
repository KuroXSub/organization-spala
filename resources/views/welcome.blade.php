@extends('layouts.app')

@section('title', 'Beranda - SPALA')

@section('content')
    <section class="welcome">
        <section class="bg-white">
            <div class="row about">
                <div class="col-lg-6 p-f">
                    <h2 class="mb-3 text-center" style="font-weight: 500;">{{ $welcomeTentang->title }}</h2>
                    <p class="lead text-justify">
                        {!! $welcomeTentang->content !!}
                    </p>
                    <a href="{{ route('about') }}" class="btn custom-btn btn-fix mt-2">Tentang Kami</a>
                </div>
                <div class="col-lg-6 p-f p-t">
                    <div class="card" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $welcomeImage->image) }}">
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $welcomeImage->image) }}" class="img-fluid rounded shadow gallery-image" alt="Gambar Tentang Kami">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
    <section class="py-4 text-left">
        <h2 class="section-title" style="font-weight: 600;">Berita Terbaru</h2>
        <div class="row justify-content-center mt-3">
            @foreach($latestNews as $news)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title news-title" style="font-weight: 500;">
                            <a href="{{ route('news.show', $news) }}" class="text-decoration-none">{{ $news->title }}</a>
                        </h5>
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="news-image">
                        </div>
                        <a href="{{ route('news.show', $news) }}" class="text-decoration-none news-content"> 
                            <p class="card-text news-content">{{ Str::limit(strip_tags($news->content), 100) }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('news.index') }}" class="btn custom-btn mt-3">Lihat Semua Berita</a>
    </section>
    
    <section class="py-4 text-left">
        <h2 class="section-title" style="font-weight: 600;">Galeri Terbaru</h2>
        <div class="row justify-content-center mt-3">
            @foreach($latestGalleries as $gallery)
            <div class="col-md-4 mb-3">
                <div class="card-body">
                    <div class="card gallery-item" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $gallery->image) }}">
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="gallery-image">
                        </div>
                        <div class="card-body">
                            <p class="card-text galleries-title" style="font-weight: 500;">{{ $gallery->title }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('galleries.index') }}" class="btn custom-btn mt-3">Lihat Semua Galeri</a>
    </section>
    
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>
</section>

@endsection