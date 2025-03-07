// Buka modal dan tampilkan gambar
document.querySelectorAll('.news-image, .gallery-image').forEach(image => {
    image.addEventListener('click', function () {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modal.style.display = 'block';
        modalImg.src = this.src;
    });
});

// Tutup modal
document.querySelector('#imageModal .close').addEventListener('click', function () {
    document.getElementById('imageModal').style.display = 'none';
});

// Tutup modal dengan mengklik di luar modal
window.addEventListener('click', function (event) {
    const modal = document.getElementById('imageModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

document.getElementById('navToggle').addEventListener('click', function() {
    document.getElementById('mobileNav').classList.toggle('active');
    this.classList.toggle('active');
});

// efek bayangan header saat scroll
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) { // Ubah angka 50 sesuai kebutuhan
        header.classList.add('shadow-scroll');
    } else {
        header.classList.remove('shadow-scroll');
    }
});