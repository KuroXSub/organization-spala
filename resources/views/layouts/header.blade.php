<header class="bg-white shadow-sm p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="mb-0" style="font-weight: 700;">SPALA</h1>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="d-none d-md-flex" id="mainNav">
            <a href="{{ route('welcome') }}" class="nav-link-header mx-3 px-3 py-2 text-decoration-none text-lg hover:bg-gray-200 rounded-md" style="font-weight: 500;">Beranda</a>
            <a href="{{ route('organization') }}" class="nav-link-header mx-3 px-3 py-2 text-decoration-none text-lg hover:bg-gray-200 rounded-md" style="font-weight: 500;">Organisasi</a>
            <a href="{{ route('news.index') }}" class="nav-link-header mx-3 px-3 py-2 text-decoration-none text-lg hover:bg-gray-200 rounded-md" style="font-weight: 500;">Berita</a>
            <a href="{{ route('galleries.index') }}" class="nav-link-header mx-3 px-3 py-2 text-decoration-none text-lg hover:bg-gray-200 rounded-md" style="font-weight: 500;">Galeri</a>
            <a href="{{ route('about') }}" class="nav-link-header mx-3 px-3 py-2 text-decoration-none text-lg hover:bg-gray-200 rounded-md" style="font-weight: 500;">Tentang Kami</a>
        </nav>
        <nav class="mobile-nav" id="mobileNav">
            <a href="{{ route('welcome') }}" class="nav-link">Beranda</a>
            <a href="{{ route('organization') }}" class="nav-link">Organisasi</a>
            <a href="{{ route('news.index') }}" class="nav-link">Berita</a>
            <a href="{{ route('galleries.index') }}" class="nav-link">Galeri</a>
            <a href="{{ route('about') }}" class="nav-link">Tentang Kami</a>
        </nav>
    </div>
</header>