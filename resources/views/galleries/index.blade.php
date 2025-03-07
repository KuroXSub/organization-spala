@extends('layouts.app')

@section('title', 'Semua Galeri - SPALA')

@section('content')
    <section class="gallery">
        <h2 class="section-title" style="font-weight: 600;">Semua Galeri</h2>

        <!-- Form Pencarian dan Filter -->
        <form action="{{ route('galleries.index') }}" method="GET" class="search-filter-form">
            <input type="text" id="search-input" name="search" placeholder="Cari galeri..." value="{{ request('search') }}">
            <select name="year" id="year-select">
                <option value="">Pilih Tahun</option>
                @for ($year = date('Y'); $year >= 2024; $year--)
                    <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                @endfor
            </select>
            <button type="submit">Cari</button>
            <a href="{{ route('galleries.index') }}" class="btn btn-secondary">
                    Refresh
            </a>
        </form>

        <!-- Daftar Galeri -->
        <div class="row justify-content-center mt-3">
            <div class="gallery-container">
                <div class="row justify-content-center mt-3">
                    @foreach($galleries as $gallery)
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
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            {{ $galleries->links('pagination::bootstrap-4') }}
        </div>
    </section>
@endsection