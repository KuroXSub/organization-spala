@extends('layouts.app')

@section('title', 'Tentang Kami - SPALA')

@section('content')
    <section class="welcome about">
        <h2 class="section-title text-left fw-bold mb-3">{{ $tentangFull->title }}</h2>

        <!-- Bagian Pertama: 3 Paragraf -->
        <div class="row mb-3">
            <div class="col-md-12">
                <p class="text-justify">
                    {!! $tentangFull->content !!}
                </p>
            </div>
        </div>

        <!-- Bagian Kedua: Gambar di Kiri, List di Kanan -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $aboutImage1->image) }}">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $aboutImage1->image) }}" class="img-fluid rounded shadow gallery-image" alt="Gambar Tentang Kami 1">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="mt-4">{{ $tentangTujuan->title }}</h5>
                <p class="text-left">
                    {!! $tentangTujuan->content !!}
                </p>
            </div>
        </div>

        <!-- Bagian Ketiga: Gambar di Kiri, List di Kanan -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $aboutImage2->image) }}">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $aboutImage2->image) }}" class="img-fluid rounded shadow gallery-image" alt="Gambar Tentang Kami 2">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="mt-4">{{ $tentangKegiatan->title }}</h5>
                <p class="text-justify">
                    {!! $tentangKegiatan->content !!}
                </p>
            </div>
        </div>
    </section>
@endsection