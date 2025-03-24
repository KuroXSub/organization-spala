@extends('layouts.app')

@section('title', 'Semua Berita - SPALA')

@section('content')
    <section class="news">
        <h2 class="section-title" style="font-weight: 600;">Semua Berita</h2>

        <form action="{{ route('news.index') }}" method="GET" class="search-filter-form">
            <input type="text" id="search-input" name="search" placeholder="Cari berita..." value="{{ request('search') }}">
            <select name="year" id="year-select">
                <option value="">Pilih Tahun</option>
                @for ($year = date('Y'); $year >= 2024; $year--)
                    <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                @endfor
            </select>
            <button type="submit">Cari</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">
                Refresh
            </a>
        </form>

        <div class="row justify-content-center mt-3">
            <div class="news-container">
                <div class="row justify-content-center mt-3">
                    @foreach($news as $article)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title news-title" style="font-weight: 500;">
                                        <a href="{{ route('news.show', $article) }}" class="text-decoration-none">{{ $article->title }}</a>
                                    </h5>
                                    <div class="image-container">
                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="news-image">
                                    </div>
                                    <a href="{{ route('news.show', $article) }}" class="text-decoration-none news-content"> 
                                        <p class="card-text news-content">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="pagination">
            {{ $news->links('pagination::bootstrap-4') }}
        </div>
    </section>
@endsection

