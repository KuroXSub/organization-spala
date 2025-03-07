<h1>Website Organisasi Sederhana</h1>
<p>Website ini adalah sebuah platform sederhana untuk organisasi yang dilengkapi dengan fitur CRUD (Create, Read, Update, Delete) untuk berita dan galeri, serta beberapa halaman statis seperti beranda, organisasi, dan tentang kami. Website ini juga memiliki fitur pencarian, filter berdasarkan tahun, dan pagination untuk berita dan galeri. Manajemen admin dilakukan menggunakan Filament v3. Website ini dikembangkan dengan Laravel 12, menggunakan Laragon sebagai web server dan database, dengan PHP 8.3.15 dan MySQL 8.0.30.</p>

<h2>Fitur</h2>
<ul>
  <li><strong>CRUD Berita:</strong> Manajemen berita (tambah, edit, hapus, lihat).</li>
  <li><strong>CRUD Galeri:</strong> Manajemen galeri (tambah, edit, hapus, lihat).</li>
  <li><strong>Halaman Statis:</strong>
    <ul>
      <li>Beranda</li>
      <li>Organisasi</li>
      <li>Tentang Kami</li>
    </ul>
  </li>
  <li><strong>Pencarian:</strong> Mencari berita dan galeri berdasarkan kata kunci.</li>
  <li><strong>Filter Berdasarkan Tahun:</strong> Filter berita dan galeri berdasarkan tahun.</li>
  <li><strong>Pagination:</strong> Pagination untuk berita dan galeri.</li>
  <li><strong>Manajemen Admin:</strong> Admin dapat mengelola konten melalui panel admin yang dibangun dengan Filament v3.</li>
</ul>

<h2>Teknologi yang Digunakan</h2>
<ul>
  <li><strong>Framework:</strong> Laravel 12</li>
  <li><strong>Web Server:</strong> Laragon</li>
  <li><strong>PHP:</strong> 8.3.15</li>
  <li><strong>Database:</strong> MySQL 8.0.30</li>
  <li><strong>Admin Panel:</strong> Filament v3</li>
</ul>

<h2>Instalasi</h2>
<p>Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:</p>

<h3>Prasyarat</h3>
<ul>
  <li>PHP 8.3.15</li>
  <li>Composer</li>
  <li>MySQL 8.0.30</li>
  <li>Laragon (atau web server lain yang mendukung PHP dan MySQL)</li>
</ul>

<h3>Langkah-langkah Instalasi</h3>
<ol>
  <li>
    <strong>Clone Repository</strong>
    <pre><code>git clone https://github.com/KuroXSub/organization-spala.git
cd organization-spala</code></pre>
  </li>
  <li>
    <strong>Setup Environment</strong>
    <pre><code>cp .env.example .env</code></pre>
    <p>Buka file <code>.env</code> dan sesuaikan konfigurasi database:</p>
    <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_spala
DB_USERNAME=root
DB_PASSWORD=</code></pre>
  </li>
  <li>
    <strong>Generate Application Key</strong>
    <pre><code>php artisan key:generate</code></pre>
  </li>
  <li>
    <strong>Jalankan Migrasi dan Seeder</strong>
    <pre><code>php artisan migrate --seed</code></pre>
  </li>
  <li>
    <strong>Jalankan Server</strong>
    <pre><code>php artisan serve</code></pre>
    <p>Buka browser dan akses <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a> untuk melihat website.</p>
  </li>
</ol>

<h3>Akses Admin Panel</h3>
<p>Buat user dengan perintah:</p>
<pre><code>php artisan make:filament-user</code></pre>
<p>Untuk mengakses admin panel, buka <a href="http://127.0.0.1:8000/admin">http://127.0.0.1:8000/admin</a> dan login dengan akun admin yang telah dibuat.</p>
