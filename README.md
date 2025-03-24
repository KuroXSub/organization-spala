
<h1>Website Organisasi Sederhana</h1>
<p>Website ini adalah sebuah platform sederhana untuk organisasi yang dilengkapi dengan fitur CRUD (Create, Read, Update, Delete) untuk berita dan galeri, serta beberapa halaman dinamis seperti beranda, organisasi, dan tentang kami. Website ini juga memiliki fitur pencarian, filter berdasarkan tahun, dan pagination untuk berita dan galeri. Manajemen admin dilakukan menggunakan Filament v3. Website ini dikembangkan dengan Laravel 12, menggunakan Laragon sebagai web server dan database, dengan PHP 8.3.15 dan MySQL 8.0.30.</p>

<h2>Fitur</h2>
<ul>
    <li><strong>CRUD Berita:</strong> Manajemen berita (tambah, edit, hapus, lihat).</li>
    <li><strong>CRUD Galeri:</strong> Manajemen galeri (tambah, edit, hapus, lihat).</li>
    <li><strong>Halaman Dinamis:</strong>
        <ul>
            <li><strong>Tentang Kami:</strong> Konten tentang organisasi dapat diubah melalui admin panel.</li>
            <li><strong>Organisasi:</strong> Konten visi, misi, tujuan, dan divisi dapat diubah melalui admin panel.</li>
        </ul>
    </li>
    <li><strong>Pencarian:</strong> Mencari berita dan galeri berdasarkan kata kunci.</li>
    <li><strong>Filter Berdasarkan Tahun:</strong> Filter berita dan galeri berdasarkan tahun.</li>
    <li><strong>Pagination:</strong> Pagination untuk berita dan galeri.</li>
    <li><strong>Manajemen Admin:</strong> Admin dapat mengelola konten melalui panel admin yang dibangun dengan Filament v3.</li>
    <li><strong>Layout Responsif:</strong> Desain yang responsif dengan tambahan CSS untuk halaman show artikel.</li>
</ul>

<h2>Teknologi yang Digunakan</h2>
<ul>
    <li><strong>Framework:</strong> Laravel 12</li>
    <li><strong>Web Server:</strong> Laragon</li>
    <li><strong>PHP:</strong> 8.3.15</li>
    <li><strong>Database:</strong> MySQL 8.0.30</li>
    <li><strong>Admin Panel:</strong> Filament v3</li>
    <li><strong>Frontend:</strong> Tailwind CSS, Alpine.js</li>
</ul>

<h2>Instalasi</h2>
<h3>Prasyarat</h3>
<ul>
    <li>PHP 8.3.15</li>
    <li>Composer</li>
    <li>Node.js (untuk build assets)</li>
    <li>MySQL 8.0.30</li>
    <li>Laragon (atau web server lain yang mendukung PHP dan MySQL)</li>
</ul>

<h3>Langkah-langkah Instalasi</h3>
<ol>
<li><strong>Clone Repository:</strong></li>
<pre><code>git clone https://github.com/KuroXSub/organization-spala.git
cd organization-spala</code></pre>

<li><strong>Setup Environment:</strong></li>
<pre><code>cp .env.example .env</code></pre>
<p>Buka file <code>.env</code> dan sesuaikan konfigurasi database:</p>
<pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_spala
DB_USERNAME=root
DB_PASSWORD=</code></pre>
    
<li><strong>Generate Application Key:</strong></li>
<pre><code>php artisan key:generate</code></pre>

<li><strong>Install Dependencies:</strong></li>
<pre><code>composer install
npm install</code></pre>

<li><strong>Build Assets:</strong></li>
<pre><code>npm run build</code></pre>

<li><strong>Jalankan Migrasi:</strong></li>
<pre><code>php artisan migrate</code></pre>

<li><strong>Jalankan Server:</strong></li>
<pre><code>composer run dev
php artisan serve</code></pre>
    <p>Buka browser dan akses <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a> untuk melihat website.</p>
</ol>

<h2>Akses Admin Panel</h2>
<p>Buat user dengan perintah:</p>
<pre><code>php artisan make:filament-user</code></pre>
<p>Untuk mengakses admin panel, buka <a href="http://127.0.0.1:8000/admin">http://127.0.0.1:8000/admin</a> dan login dengan akun admin yang telah dibuat.</p>

<h2>Penambahan Fitur Baru</h2>
<h3>1. Halaman Dinamis Tentang Kami</h3>
<p>Konten tentang organisasi, tujuan, dan kegiatan dapat diubah melalui admin panel. Data disimpan di tabel <code>about_organization</code> dengan kolom <code>slug</code>, <code>title</code>, dan <code>content</code>.</p>
<p>Contoh slug:</p>
<ul>
    <li><code>welcome-tentang</code>: Tentang Kami (untuk halaman beranda).</li>
    <li><code>tentang-full</code>: Tentang Kami (untuk halaman about).</li>
    <li><code>tentang-tujuan</code>: Tujuan didirikannya SPALA.</li>
    <li><code>tentang-kegiatan</code>: Kegiatan rutin SPALA.</li>
</ul>

<h3>2. Halaman Dinamis Organisasi</h3>
<p>Konten visi, misi, tujuan, dan divisi dapat diubah melalui admin panel. Data disimpan di tabel <code>about_organization</code> dan <code>divisions</code>.</p>
<p>Contoh slug:</p>
<ul>
    <li><code>organisasi-visi</code>: VISI SPALA.</li>
    <li><code>organisasi-misi</code>: MISI SPALA.</li>
    <li><code>organisasi-maksud</code>: MAKSUD DAN TUJUAN SPALA.</li>
</ul>
<p>Divisi disimpan di tabel <code>divisions</code> dengan kolom <code>title</code>, <code>content</code>, dan <code>image</code>.</p>

<h3>3. Penambahan Layout (CSS) untuk Show Artikel</h3>
<p>Halaman show artikel telah diperbarui dengan desain responsif.</p>
