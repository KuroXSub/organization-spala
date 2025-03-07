@extends('layouts.app')

@section('title', 'Tentang Kami - SPALA')

@section('content')

    <section class="welcome about">
        <h2 class="section-title text-left fw-bold mb-3">Tentang Kami</h2>

        <!-- Bagian Pertama: 3 Paragraf -->
        <div class="row mb-3">
            <div class="col-md-12">
                <p class="text-justify">
                    <p>SPALA (Siswa Pecinta Alam) adalah suatu organisasi pecinta alam yang ada di SMA Negeri Banyumas, salah satu SMA di provinsi Jawa Tengah. Pada tanggal 14 Agustus 1990, SPALA resmi didirikan oleh tiga orang guru yaitu Bapak Gunarso, Bapak Kodrat, dan Bapak Tugur. Jumlah anggota pada angkatan pertama adalah 121 siswa.</p>
                    <p>SPALA adalah wadah perhimpunan para generasi muda di lingkup SMA Negeri Banyumas yang mempunyai minat dan hobi sama dalam arti berpikir dan bertindak untuk mencintai tanah air, alam sekitar, lingkungan, serta kehidupan sosialnya dengan melaksanakan kegiatan kreatif yang langsung menghubungkan para penggiatnya dengan masyarakat sekolah maupun masyarakat umum.</p>
                    <p>Dengan semboyan "Hamarsudi Langgenging Bawana", diharapkan semua anggota memiliki jiwa untuk bersedia melestarikan alam. Meskipun anggota sudah lulus, namun jiwa pecinta alam yang dimiliki sejak anggota itu dilantik bersifat abadi.</p>
                </p>
            </div>
        </div>

        <!-- Bagian Kedua: Gambar di Kiri, List di Kanan -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/img-tentang-kami1.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/img-tentang-kami1.png') }}" class="img-fluid rounded shadow gallery-image" alt="Gambar Tentang Kami 1">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="mt-4">Tujuan didirikannya SPALA diantaranya:</h5>
                <p class="text-left">
                    <ul class="list-unstyled">
                        <li>• Mengamalkan Pancasila serta ikrar, hakekat, dan kode etik pecinta alam</li>
                        <li>• Meningkatkan rasa cinta pada alam dan lingkungan</li>
                        <li>• Menambah pengetahuan tentang alam dan lingkungan</li>
                        <li>• Memupuk jiwa gotong royong setiap anggota</li>
                        <li>• Memperat tali persaudaraan antar anggota</li>
                        <li>• Menyalurkan minat, bakat, dan hobi setiap anggota</li>
                    </ul>
                </p>
            </div>
        </div>

        <!-- Bagian Ketiga: Gambar di Kiri, List di Kanan -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/img-tentang-kami2.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/img-tentang-kami2.png') }}" class="img-fluid rounded shadow gallery-image" alt="Gambar Tentang Kami 2">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="mt-4">Kegiatan yang rutin dilaksanakan oleh SPALA SMA Negeri Banyumas yaitu:</h5>
                <p class="text-justify">
                    <ul class="list-unstyled">
                        <li>• ORAB (Rappelling, Prusiking, Flying Fox)</li>
                        <li>• Mountenering (Pendakian)</li>
                        <li>• Kegiatan memperingati hari bumi, 22 April</li>
                        <li>• Peringatan Hari Ulang Tahun SPALA, 14 Agustus.</li>
                        <li>• DIKLATSAR</li>
                        <li>• Camping and Hiking</li>
                        <li>• Kegiatan Bersih Lingkungan Sekolah</li>
                        <li>• Kegiatan Bersih Hutan Sekolah</li>
                        <li>• Kegiatan Peduli Lingkungan</li>
                        <li>• Koordinasi atau latihan gabungan</li>
                        <li>• Baksos (Program OSIS)</li>
                        <li>• Pengibaran Sang Saka di Puncak Gunung Slamet</li>
                        <li>• Perlombaan Lintas Alam</li>
                        <li>• Go Green</li>
                    </ul>
                </p>
            </div>
        </div>
    </section>
@endsection