<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jembatan Asa - Berbagi Kebaikan</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            padding-top: 80px;
        }
        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .logo img {
            width: 40px;
            height: 40px;
        }
        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #57B2F2;
        }
        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        .nav-menu a:hover {
            color: #57B2F2;
        }
        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            padding: 4rem 2rem;
            min-height: 500px;
            background: #f8f9fa;
            flex-wrap: wrap;
            gap: 2rem;
        }
        .hero-content {
            flex: 1;
            max-width: 600px;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        .hero-highlight {
            background: #1F4995;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-subtitle {
            color: #57B2F2;
            font-size: 1rem;
            margin-bottom: 2rem;
            font-weight: 500;
        }
        .btn-donasi {
            background: #57B2F2;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-donasi:hover {
            text-decoration: none;
            background: #369de4;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .hero-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        /* About Section */
        .about {
            display: flex;
            padding: 4rem 2rem;
            gap: 3rem;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .about-content {
            flex: 1;
        }
        .about-title {
            font-size: 2rem;
            color: #57B2F2;
            margin-bottom: 1rem;
        }
        .about-text {
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.8;
        }
    
        .about-image {
            flex: 1;
        }
        .about-image img { 
            width: 100%;
            height: 250px; 
            object-fit: cover;
            border-radius: 10px;
        }
        /* Programs Section */
        .programs {
            padding: 4rem 2rem;
            background: #f8f9fa;
        }
        .programs-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 3rem;
            color: #333;
        }
        .programs-container {
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 1rem;
        }
        .programs-slider {
            display: flex;
            gap: 1.5rem;
            flex-wrap: nowrap; 
        }
        .program-card {
            flex: 0 0 auto;
            width: 300px;
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid #57B2F2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .program-image {
            width: 100%;
            margin-bottom: 1rem;
        }
        .program-image img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }
        .program-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #57B2F2;
            margin-bottom: 0.5rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            word-wrap: break-word;
        }
        .program-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            line-height: 1.5;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            word-wrap: break-word;
        }
        .program-target {
            color: #333;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .program-date {
            color: #999;
            font-size: 0.8rem;
            margin-bottom: 1.5rem;
        }
        .program-buttons {
            display: flex;
            flex-direction: row; 
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
            flex-wrap: nowrap; 
        }
        .btn-donasi-uang,
        .btn-donasi-barang {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
            font-weight: 600;
            border: none;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            cursor: pointer;
            min-width: 120px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            white-space: nowrap;
        }

        /* Tombol Uang */
        .btn-donasi-uang {
            background-color: #57B2F2;
        }
        .btn-donasi-uang:hover {
            background-color: #369de4;
            transform: scale(1.03);
        }

        /* Tombol Barang */
        .btn-donasi-barang {
            background-color: #57B2F2;
        }
        .btn-donasi-barang:hover {
            background-color: #369de4;
            transform: scale(1.03);
        }

        /* Responsif HP */
        @media (max-width: 480px) {
            .btn-donasi-uang,
            .btn-donasi-barang {
                min-width: 100px;
                font-size: 0.85rem;
                padding: 0.5rem 1rem;
            }

            .program-buttons {
                gap: 0.4rem;
            }
        }

        /* Berita Section */
        .news {
            padding: 4rem 2rem;
            background: #fff;
        }
        .news-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 3rem;
            color: #333;
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .news-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }
        .news-content {
            padding: 1.5rem;
        }
        .news-title-card {
            font-size: 1.2rem;
            font-weight: bold;
            color: #1F4995;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .news-title-card a {
            text-decoration: none;
            color: inherit;
        }

        .news-title-card a:hover {
            text-decoration: none;
        }

        .news-date {
            font-size: 0.85rem;
            color: #999;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1F4995 0%, #57B2F2 50%, #ffffff 500%);
            padding: 3rem 2rem 2rem;
            color: white;
        }
        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-section h3 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        .footer-section p, .footer-section li {
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }
        .footer-section ul {
            list-style: none;
        }
        .footer-section ul li:before {
            content: "• ";
            color: white;
            margin-right: 0.5rem;
        }
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.2); 
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.3s;
        }
        .social-icon:hover {
            background: rgba(255,255,255,0.4);
        }
        .social-icon img {
            width: 24px;
            height: 24px;
            object-fit: contain;
            border-radius: 50%;
            background: transparent;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-image {
                margin-top: 2rem;
            }
            .about {
                flex-direction: column;
            }
            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .nav-menu {
                display: none;
            }
            .programs-slider {
                padding-left: 1rem; /* Adjust padding for better mobile scroll */
                padding-right: 1rem;
            }
            .program-card {
                width: 280px; /* Adjust card width for smaller screens */
            }
            .btn-donasi-uang,
            .btn-donasi-barang {
                min-width: unset; /* Allow buttons to shrink */
                flex: 1; /* Take equal space */
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="{{asset('images/Jembatan_Asa.jpg')}}" alt="Jembatan Asa Logo">
            <span class="logo-text">JEMBATAN ASA</span>
        </div>
        <nav class="navbar">
            <ul class="nav-menu">
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#programs">Program Kami</a></li>
                <li><a href="#berita">Berita</a></li>
                <li><a href="#social">Media Sosial</a></li>
            </ul>
        </nav>
    </header>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                Berbagi kebaikan,<br>
                Wujudkan<br>
                <span class="hero-highlight">Harapan</span> Sesama
            </h1>
            <p class="hero-subtitle">#MENGALIRKANKEBAIKAN</p>
            <a href="#programs" class="btn-donasi">Donasi Sekarang</a>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/berbagi beras.jpg') }}" alt="Donasi Bersama Jembatan Asa">
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-content">
            <h2 class="about-title">Tentang kami</h2>
            <p class="about-text">
                Yayasan Taman Zakat Indonesia Berdiri tahun 2018.<br>
                Taman Zakat merupakan Lembaga Filantropi Profesional dan terpercaya yang berfokus pada Sarana dakwah untuk Pengembangan Alquran, Pendidikan, Kesehatan dan Kemanusiaan.<br><br>
                Kami Memfasilitasi perkembangan generasi yang penuh berkah dan Kami mempunyai mimpi bisa menjadi salah satu tulang punggung gerakan kebaikan ummat.
            </p>
        </div>
        <div class="about-image">
            <img src="{{ asset('images/charity-donation.jpg') }}" alt="Tentang Kami">
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs" id="programs">
        <h2 class="programs-title">Program kami</h2>
        <div class="programs-container">
            <div class="programs-slider">
                <!-- Program Cards - Duplicated for infinite loop -->
                @php use Illuminate\Support\Str; @endphp
                @foreach ($programs as $program)
                    <div class="program-card">
                        {{-- Gambar --}}
                        <div class="program-image">
                            @if ($program->foto)
                                <img src="{{ asset('storage/' . $program->foto) }}" alt="{{ $program->nama_program }}">
                            @else
                                <img src="/placeholder.svg?height=150&width=300" alt="default image">
                            @endif
                        </div>
                        {{-- Judul --}}
                        <h3 class="program-title">{{ $program->nama_program }}</h3>
                        {{-- Deskripsi singkat --}}
                        <p class="program-description">{{ Str::limit($program->deskripsi, 100) }}</p>
                        {{-- Target dan Tanggal --}}
                        <p class="program-target">Target Donasi: Rp {{ number_format($program->target_donasi, 0, ',', '.') }}</p>
                        <p class="program-date">Sampai: {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('Y-m-d') }}</p>
                        {{-- Tombol --}}
                        <div class="program-buttons">
                            <a href="{{ route('donasi.uang', ['program_id' => $program->id]) }}" class="btn-donasi-uang">
                                Donasi Uang
                            </a>
                            <a href="{{ route('donasi.barang', ['program_id' => $program->id]) }}" class="btn-donasi-barang">
                                Donasi Barang
                            </a>
                        </div>
                    </div>
                @endforeach
        </div>
    </section>

    <!-- Berita Section -->
    <section class="news" id="berita">
        <h2 class="news-title">Berita Terbaru</h2>
        <div class="news-grid">
            @foreach ($beritas as $berita)
                <div class="news-card">
                    <a href="{{ route('berita.show', $berita->id) }}">
                        @if ($berita->foto)
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}">
                        @else
                            <img src="/placeholder.svg?height=200&width=300" alt="Placeholder">
                        @endif
                    </a>
                    <div class="news-content">
                        <h3 class="news-title-card">
                            <a href="{{ route('berita.show', $berita->id) }}">
                                {{ $berita->judul }}
                            </a>
                        </h3>
                        <p class="news-date">{{ $berita->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

        <!-- Footer -->
        <footer class="footer" style="background-color: #D0E8FF; color: white; padding: 2rem 1.5rem;">
            <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: 2rem;">

                <!-- Logo & Deskripsi -->
                <div style="flex: 1 1 400px;">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <img src="{{ asset('images/jembatanasa.png') }}" alt="Logo Jembatan Asa" style="height: 55px;" onerror="this.src='{{ asset('images/placeholder.svg') }}'">
                        <span style="font-size: 1.5rem; font-weight: bold;">JEMBATAN ASA</span>
                    </div>
                    <p style="font-size: 0.95rem; margin-top: 1rem; line-height: 1.6; color: white;">
                        Jembatan Asa adalah yayasan kemanusiaan yang berdedikasi untuk menyebarkan nilai-nilai kepedulian melalui program dakwah, pendidikan, kesehatan, dan bantuan sosial. Kami hadir sebagai penghubung antara kebaikan dan harapan bagi sesama, dengan komitmen tinggi pada transparansi dan keberlanjutan.
                    </p>
                </div>

                <!-- Ikuti Kami -->
                <div style="flex: 1 1 250px; text-align: center;">
                    <h4 style="margin-bottom: 0.8rem; font-size: 1rem; color: white;">Ikuti Kami di</h4>
                    <div style="display: flex; justify-content: center; gap: 1rem;">
                        <a href="https://facebook.com" target="_blank">
                            <img src="{{ asset('images/fblogo.png') }}" alt="Facebook" style="height: 30px;" onerror="this.src='{{ asset('images/placeholder.svg') }}'">
                        </a>
                        <a href="https://instagram.com" target="_blank">
                            <img src="{{ asset('images/Logoig.png') }}" alt="Instagram" style="height: 30px;" onerror="this.src='{{ asset('images/placeholder.svg') }}'">
                        </a>
                        <a href="https://tiktok.com" target="_blank">
                            <img src="{{ asset('images/logoTiktok.png') }}" alt="TikTok" style="height: 30px;" onerror="this.src='{{ asset('images/placeholder.svg') }}'">
                        </a>
                        <a href="https://youtube.com" target="_blank">
                            <img src="{{ asset('images/LogoYT.png') }}" alt="YouTube" style="height: 30px;" onerror="this.src='{{ asset('images/placeholder.svg') }}'">
                        </a>
                    </div>
                </div>

            </div>

            <!-- Copyright -->
            <div style="text-align: center; font-size: 0.8rem; margin-top: 2rem; border-top: 1px solid rgba(255,255,255,0.3); padding-top: 1rem; color: white;">
                &copy; {{ date('Y') }} Jembatan Asa. All rights reserved.
            </div>
        </footer>
