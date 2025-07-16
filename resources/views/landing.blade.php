<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jembatan Asa - Berbagi Kebaikan</title>
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
        }

        /* Header Styles */
        .header {
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
            background: #57B2F2;
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
            background: #FF009D;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-donasi:hover {
            background: #e6008a;
        }

        .hero-image {
            flex: 1;
            margin-left: 2rem;
        }

        .placeholder-image {
            width: 100%;
            height: 300px;
            background: #c0c0c0;
            border-radius: 10px;
        }

        /* About Section */
        .about {
            display: flex;
            padding: 4rem 2rem;
            gap: 3rem;
            align-items: flex-start;
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

        .btn-selengkapnya {
            background: #FF009D;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .about-image {
            flex: 1;
        }

        .about-image .placeholder-image {
            height: 250px;
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
            position: relative;
            overflow: hidden;
        }

        .programs-slider {
            display: flex;
            gap: 1.5rem;
        }

        .program-card {
            min-width: 280px;
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid #57B2F2;
        }

        .program-image {
            width: 100%;
            height: 150px;
            background: #c0c0c0;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .program-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #57B2F2;
            margin-bottom: 0.5rem;
        }

        .program-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            line-height: 1.5;
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
            gap: 0.5rem;
        }

        .btn-donasi-uang {
            flex: 1;
            background: #FF009D;
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .btn-donasi-barang {
            flex: 1;
            background: #57B2F2;
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 0.9rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #FF009D 0%, #57B2F2 50%, #ffffff 100%);
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
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-image {
                margin-left: 0;
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
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="/placeholder.svg?height=40&width=40" alt="Jembatan Asa Logo">
            <span class="logo-text">JEMBATAN ASA</span>
        </div>
        <nav>
            <ul class="nav-menu">
                <li><a href="#programs">Program Unggulan</a></li>
                <li><a href="#about">Tentang Kami</a></li>
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
            <button class="btn-donasi">💝 Donasi Sekarang</button>
        </div>
        <div class="hero-image">
            <div class="placeholder-image"></div>
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
            <button class="btn-selengkapnya">selengkapnya</button>
        </div>
        <div class="about-image">
            <div class="placeholder-image"></div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs" id="programs">
        <h2 class="programs-title">Program kami</h2>
        <div class="programs-container">
            <div class="programs-slider">
                <!-- Program Cards - Duplicated for infinite loop -->
                <div class="program-card">
                    <div class="program-image"></div>
                    <h3 class="program-title">Donasi Posko Hangat untuk Terdampak Bencana</h3>
                    <p class="program-description">Bantuan Darurat Pengungsi Bencana (BPDB) mencatat ribuan kejadian bencana di seluruh...</p>
                    <p class="program-target">Target Donasi: Rp 50.000.000</p>
                    <p class="program-date">Sampai: 2024-12-15</p>
                    <div class="program-buttons">
                        <button class="btn-donasi-uang">Donasi Uang</button>
                        <button class="btn-donasi-barang">Donasi Barang</button>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image"></div>
                    <h3 class="program-title">9.000 Paket Makanan untuk Korban Banjir Gorontalo</h3>
                    <p class="program-description">Banjir kota Gorontalo telah meluluh lantakkan beberapa kecamatan sejak 7 Juli 2024. BAZNAS Tanggap Bencana...</p>
                    <p class="program-target">Target Donasi: 9.000 paket makanan</p>
                    <p class="program-date">Sampai: 2024-12-10</p>
                    <div class="program-buttons">
                        <button class="btn-donasi-uang">Donasi Uang</button>
                        <button class="btn-donasi-barang">Donasi Barang</button>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image"></div>
                    <h3 class="program-title">Anak-Anak Membutuhkan Bantuan Anda</h3>
                    <p class="program-description">Situasi di Jalur Gaza makin memperburuk kondisi anak-anak hingga akhir tahun 2025. Kampanye ini digagas oleh Teman...</p>
                    <p class="program-target">Target Donasi: Rp 50.000.000</p>
                    <p class="program-date">Sampai: 2024-12-16</p>
                    <div class="program-buttons">
                        <button class="btn-donasi-uang">Donasi Uang</button>
                        <button class="btn-donasi-barang">Donasi Barang</button>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image"></div>
                    <h3 class="program-title">Indonesia Siap Siaga (Persiapan Bencana Alam)</h3>
                    <p class="program-description">Dompet Dhuafa Yogyakarta mengajak masyarakat untuk membangun kesadaran bersama menghadapi letusan gunung berapi, dan bencana alam lainnya melalui edukasi dan...</p>
                    <p class="program-target">Target Donasi: Rp 50.000.000</p>
                    <p class="program-date">Sampai: 2024-12-10</p>
                    <div class="program-buttons">
                        <button class="btn-donasi-uang">Donasi Uang</button>
                        <button class="btn-donasi-barang">Donasi Barang</button>
                    </div>
                </div>
        </section>

    <!-- Footer -->
    <footer class="footer" id="social">
        <div class="footer-content">
            <div class="footer-section">
                <div class="logo" style="margin-bottom: 1rem;">
                    <img src="/placeholder.svg?height=40&width=40" alt="Jembatan Asa Logo">
                    <span class="logo-text">JEMBATAN ASA</span>
                </div>
                <h3>Yayasan Donasi Kemanusiaan</h3>
                <p>Lembaga Filantropi Profesional dan terpercaya yang berfokus pada Sarana dakwah untuk Pengembangan Alquran, Pendidikan, Kesehatan dan Kemanusiaan.</p>
                
                <h3 style="margin-top: 2rem;">Program Unggulan</h3>
                <ul>
                    <li>Donasi Bencana Alam</li>
                    <li>Bantuan Pendidikan Anak Yatim</li>
                    <li>Kesehatan dan Pengobatan</li>
                    <li>Sedekah Makanan Harian</li>
                    <li>Wakaf Pembangunan Masjid</li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Informasi Kami</h3>
                <ul>
                    <li>Profil Lembaga</li>
                    <li>Berita</li>
                    <li>Artikel</li>
                    <li>Mitra Korporat</li>
                    <li>Download</li>
                    <li>Login Donatur</li>
                </ul>
                
                <h3 style="margin-top: 2rem;">Kantor Pusat</h3>
                <p>Jl.GARASI, BLOK 07, No.207</p>
            </div>
            
            <div class="footer-section">
                <h3>Ikuti Kami di</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon">f</a>
                    <a href="#" class="social-icon">📷</a>
                    <a href="#" class="social-icon">🎵</a>
                    <a href="#" class="social-icon">▶</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>