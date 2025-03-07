@extends('layouts.app')

@section('title', 'Organisasi - SPALA')

@section('content')

    <section class="welcome about">
        <h2 class="section-title text-left fw-bold mb-3">Organisasi</h2>

        <div class="row mb-3">
            <div class="col-md-12"> <div class="text-center"><h5 class="sub-title">VISI SPALA</h5></div>
                <p class="mt-1">Menjadikan organisasi pecinta alam yang unggul, mandiri, peduli terhadap lingkungan, dan berkualitas serta berpola pikir luas.</p>
                <p>Dengan Indikator:</p>
                <p class="text-left">
                    <ol>
                        <li>Terwujudnya generasi penerus bangsa yang peduli terhadap lingkungan/alam.</li>
                        <li>Terwujudnya generasi yang siap terjun di masyarakat untuk mengabdi kepada bangsa dan tanah air Indonesia.</li>
                        <li>Terwujudnya proses pembelajaran tentang cara merawat alam yang baik dan benar.</li>
                        <li>Terwujudnya tenaga yang siap terjun untuk membantu penanggulangan bencana atau kegiatan sosial lainnya.</li>
                        <li>Terwujudnya sarana atau wadah bagi para pemuda untuk mengembangkan diri sesuai keampuannya masing-masing.</li>
                    </ol>
                </p>
            </div>
        </div>

        <!-- Bagian Kedua: Gambar di Kiri, List di Kanan -->
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/logo-spala.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/logo-spala.png') }}" class="img-fluid rounded shadow gallery-image" alt="Logo Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center"><h5 class="sub-title mt-4">MISI SPALA</h5></div>
                <p class="text-left">
                    <ol>
                        <li>Menjadikan anggota SPALA SMA Negeri 1 Banyumas yang berinsan mulia, beriman, dan bertakwa kepada Tuhan Yang Maha Esa.</li>
                        <li>Meningkatkan prestasi SPALA SMA Negeri 1 Banyumas.</li>
                        <li>Mendidik dan melatih untuk berperan aktif, bertanggung jawab, mandiri, dan peduli dalam pelestarian fungsi lingkungan.</li>
                        <li>Menyelenggarakan kegiatan pengabdian kepada masyarakat dan lingkungan hidup.</li>
                    </ol>
                </p>
            </div>
        </div>

        <!-- Bagian Pertama: 3 Paragraf -->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="text-center"><h5 class="sub-title mt-2">MAKSUD DAN TUJUAN SPALA</h5></div>
                <p>Adapun maksud dan tujuan kegiatan dari SPALA adalah:</p>
                <p class="text-left">
                    <ol>
                        <li>Sebagai wadah para generasi muda dalam melestarikan alam.</li>
                        <li>Tempat menempa diri untuk belajar menjadi generasi penerus bangsa yang peduli terhadap lingkungan dan alam.</li>
                        <li>Sebagai alat untuk menyalurkan bakat dan minat/hobi petualang, pendakian, penelusuran gua, pengarungan sungai, panjat tebing dan sekaligus pecinta lingkungan.</li>
                        <li>Kegiatan dalam bidang lingkungan hidup seperti konservasi alam, penghijaun, bersih lingkungan, dan sebagainya. Juga kegiatan yang bermanfaat bagi masyarakat seperti bakti sosial, penelitian sosial, penyuluhan, dan sebagainya.</li>
                        <li>Kegiatan yang bersifat organisatoris seperti manajemen organisasi, regenerasi keanggotaan, kaderisasi anggota, pengembangan SDM bagi anggota, dan seterusnya.</li>
                        <li>Pecinta Alam merupakan suatu kegiatan yang positif dan memiliki arti serta peran yang sangat bermanfaat bagi pengembangan pribadi, orang lain, dan masyarakat.</li>
                        <li>Pengetahuan tentang orientasi medan (navigasi), pengetahuan survival, manajemen perjalanan, penguasaan PPPK, dan pengetahuan sekaligus ketrampilan mengenai SAR. Kegiatan penunjang tersebut akan banyak membantu dan diperlukan untuk menghindari atau mengurangi resiko yang sangat mungkin terjadi.</li>
                    </ol>
                </p>
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/struktur.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/struktur.png') }}" class="img-fluid rounded shadow gallery-image" alt="Struktur Organisasi">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>

        <h3 class="text-left my-4" style="font-weight: 600;">DIVISI SPALA</h3>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">ORAB</h5></div>
                <p class="text-left mx-4">
                    Olahraga alam bebas di dalam Organisasi SPALA mencakup kegiatan-kegiatan petualangan seperti Rappeling dan climbing untuk memperkuat keterampilan dan ketangguhan anggotanya.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">SURVIVAL</h5></div>
                <p class="text-left mx-4">
                    Program survival di SPALA dirancang untuk melatih anggota dalam keterampilan bertahan hidup di alam liar, mengajarkan mereka bagaimana mengatasi tantangan dan keadaan darurat.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">NAVIGASI</h5></div>
                <p class="text-left mx-4">
                    Pelatihan navigasi di SPALA memberikan anggota keterampilan dalam penggunaan peta, kompas, dan teknologi navigasi modern untuk memastikan kemampuan navigasi yang baik selama kegiatan di alam bebas.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">P3K</h5></div>
                <p class="text-left mx-4">
                    Pelatihan P3K di SPALA memberikan pengetahuan dan keterampilan kepada anggota untuk memberikan pertolongan pertama pada kecelakaan atau keadaan darurat di lingkungan alam bebas.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">SAR</h5></div>
                <p class="text-left mx-4">
                    Unit SAR (Search and Rescue) di SPALA bertanggung jawab untuk melatih anggotanya dalam teknik pencarian dan penyelamatan, memastikan kemampuan untuk memberikan bantuan dalam situasi darurat di alam bebas.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">KONSERVASI</h5></div>
                <p class="text-left mx-4">
                    Unit SAR (Search and Rescue) di SPALA bertanggung jawab untuk melatih anggotanya dalam teknik pencarian dan penyelamatan, memastikan kemampuan untuk memberikan bantuan dalam situasi darurat di alam bebas.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="card" data-bs-target="#imageModal" data-image="{{ asset('img/divisi.png') }}">
                    <div class="image-container">
                        <img src="{{ asset('img/divisi.png') }}" class="img-fluid rounded shadow gallery-image" alt="Divisi Spala">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-left"><h5 class="sub-title mt-4 mx-5">MANAJEMEN PERJALANAN</h5></div>
                <p class="text-left mx-4">
                    Unit SAR (Search and Rescue) di SPALA bertanggung jawab untuk melatih anggotanya dalam teknik pencarian dan penyelamatan, memastikan kemampuan untuk memberikan bantuan dalam situasi darurat di alam bebas.
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>

    </section>
@endsection