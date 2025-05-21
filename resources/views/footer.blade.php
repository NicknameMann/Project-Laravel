<style>
    footer {
        background-color: #111;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .nav-links {
            flex-direction: column;
            margin-top: 10px;
        }

        .nav-links a {
            margin: 8px 0;
        }

        .content h1 {
            font-size: 36px;
        }
    }

    .pricelist {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 20px auto;
    }

    .pricelist img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }


    .map-link {
        position: absolute;
        bottom: 60px;
        /* Jarak dari bawah container */
        right: 180px;
        /* Jarak dari sisi kanan container */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #007BFF;
        text-decoration: none;
        font-size: 30px;
    }

    .map-link:hover {
        color: #0056b3;
        /* Warna berbeda ketika cursor menyentuh link */
        text-decoration: underline;
        /* Tampilkan garis bawah saat dihover */
    }

    .end {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: auto;
        flex-direction: column;
    }

    .end img {
        width: 100%;
        height: auto;
    }


    /* Styling dasar untuk semua slider */
    .slider {
        position: relative;
        margin: auto;
        overflow: hidden;
        height: 400px;
        /* tambahkan tinggi sesuai kebutuhan */
    }


    /* Styling untuk gambar pada slider umum */
    .slider img {
        width: 100%;
        height: auto;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .slider img.active {
        opacity: 1;
        position: relative;
    }


    /* Gaya tombol navigasi (sama untuk kedua slider) */
    .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        cursor: pointer;
        font-size: 24px;
    }

    .nav-btn.left {
        left: 10px;
    }

    .nav-btn.right {
        right: 10px;
    }

    /* Slider testimoni */

    .testimoni,
    .comments {
        width: 100%;
        height: auto;
    }


    /* Jika ingin mengubah tampilan tombol navigasi khusus untuk slider-comments */
    .comments .nav-btn {
        font-size: 26px;
    }

    footer {
        width: 100%;
        background-color: #111;
        color: white;
        padding: 20px 0;
        text-align: center;
        position: relative;
        /* Penting agar absolute positioning bekerja */
    }

    /* Kontainer ikon sosmed */
    .social-icons {
        position: absolute;
        top: 20px;
        right: 10px;
        display: flex;
        gap: 10px;
    }

    /* Gambar ikon */
    .sosmed-icon {
        height: 60px;
        width: 60px;
        border-radius: 40%;
        transition: transform 0.2s ease;
    }

    .sosmed-icon:hover {
        transform: scale(1.1);
    }

    .logo-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        animation: fadeIn 1.5s ease-in-out;
    }

    .logo-container img {
        width: 500px;
        max-width: 200%;
        height: auto;
        margin-bottom: 50px;
        box-shadow: auto;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .logo-container img:hover {
        transform: scale(1.05);
    }

    .logo-container h2 {
        font-size: 50px;
        font-weight: bold;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /* Animasi fade-in saat halaman dimuat */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .map-link:hover {
        color: #0056b3;
        /* Warna berbeda ketika cursor menyentuh link */
        text-decoration: underline;
        /* Tampilkan garis bawah saat dihover */
    }

    @media (max-width: 1024px) {
        footer>div {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 25px;
            text-align: center;
        }

        /* Urutan elemen untuk versi kecil */
        .logo-container {
            order: 1;
            width: 100%;
            max-width: 100px;
            margin: 0 auto 10px auto;
        }

        .social-icons {
            order: 2;
            width: 100%;
            max-width: 100px;
            justify-content: center;
            margin: 0 auto 20px auto;
        }

        /* Alamat dan kontak di bawah */
        footer>div>div:nth-child(3) {
            order: 3;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
</style>
<footer style="background-color: #111; color: white; padding: 20px 0; text-align: center;">
    <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">

        <div class="social-icons">
            <a href="https://wa.me/6285235388971" target="_blank">
                <img src="{{ asset('picture/whatsapp-icon.png') }}" alt="WhatsApp" class="sosmed-icon">
            </a>
            <a href="https://instagram.com/sobers.barbershop/" target="_blank">
                <img src="{{ asset('picture/instagram-icon.png') }}" alt="Instagram" class="sosmed-icon">
            </a>
        </div>


        <!-- Kiri: Logo dan Motto -->
        <div class="logo-container">
            <img src="{{ asset('picture/logo-barbershop.jpg') }}" alt="Logo Barbershop" class="sosmed-icon">
        </div>


        <!-- Tengah: Alamat dan Kontak -->
        <div style="flex: 1; min-width: 250px;">
            <p><strong>Jl. Terusan Surabaya No. 53, Kota Malang</strong></p>
            <hr style="width: 80%; margin: 20px auto; border-color: #fff;">
            <p><strong>RESERVASI? HUBUNGI KAMI</strong></p>
            <p style="font-size: 20px;">0852-3538-8971</p>
            <hr style="width: 80%; margin: 20px auto; border-color: #fff;">
            <a href="https://maps.app.goo.gl/hsPV89auhmcbL8Xo9" target="_blank"
                style="color: #00f; display: inline-block; margin-top: 10px;">Klik Untuk Melihat Lokasi</a>
        </div>

        <!-- Kanan: Sosial Media -->
        <div style="flex: 1; min-width: 250px;">
        </div>

    </div>
    <p style="margin-top: 10px; font-size: 14px;">© 2025 SOBERS Barbershop. All rights reserved.</p>
</footer>
<!-- Ganti rujukan ke file JS -->
<script src="{{ asset('js/script.js') }}"></script>