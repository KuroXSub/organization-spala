@extends('layouts.app')

@section('title', $news->title . ' - SPALA')

@section('content')
    <section class="news-detail">
        <h2>{{ $news->title }}</h2>
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="news-image">
        <p>{{ $news->content }}</p>
        <a href="{{ route('news.index') }}" class="btn">Kembali ke Berita</a>
    </section>
@endsection