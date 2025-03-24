@extends('layouts.app')

@section('title', 'Organisasi - SPALA')

@section('content')
    <section class="welcome about">
        <h2 class="section-title text-left fw-bold mb-3">Organisasi</h2>

        <!-- Visi -->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="text-center"><h5 class="sub-title">{{ $visi->title }}</h5></div>
                <p class="mt-1">
                    {!! $visi->content !!}
                </p>
            </div>
        </div>

        <!-- Misi -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $logo->image) }}">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $logo->image) }}" class="img-fluid rounded shadow gallery-image" alt="Logo SPALA">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center"><h5 class="sub-title mt-4">{{ $misi->title }}</h5></div>
                <p class="text-left">
                    {!! $misi->content !!}
                </p>
            </div>
        </div>

        <!-- Maksud dan Tujuan -->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="text-center"><h5 class="sub-title mt-2">{{ $maksud->title }}</h5></div>
                <p>
                    {!! $maksud->content !!}
                </p>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $struktur->image) }}">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $struktur->image) }}" class="img-fluid rounded shadow gallery-image" alt="Struktur Organisasi">
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!-- Divisi -->
        <h3 class="text-left my-4" style="font-weight: 600;">DIVISI SPALA</h3>
        @foreach($divisions as $division)
            <div class="row mb-3 align-items-center">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="card" data-bs-target="#imageModal" data-image="{{ asset('storage/' . $division->image) }}">
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $division->image) }}" class="img-fluid rounded shadow gallery-image" alt="{{ $division->title }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text-left"><h5 class="sub-title mt-4 mx-5">{{ $division->title }}</h5></div>
                    <p class="text-left mx-4">
                        {{ $division->content }}
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
        @endforeach
    </section>
@endsection