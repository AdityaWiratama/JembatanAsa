<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - Jembatan Asa</title>
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
                background: #f0f0f0;
                min-height: 100vh;
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

            /* Main Content */
            .main-content {
                padding: 2rem;
                max-width: 900px;
                margin: 0 auto;
                background: white;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                border-radius: 15px;
                margin-bottom: 2rem;
            }

            .news-image-container {
                width: 100%;
                height: 350px; 
                background: #c0c0c0; 
                border-radius: 10px;
                margin-bottom: 2rem;
                overflow: hidden; 
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .news-image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover; 
                border-radius: 10px;
            }

            .news-detail-title {
                font-size: 2.2rem;
                font-weight: bold;
                color: #333;
                margin-bottom: 1.5rem;
                text-align: center;
            }

            .news-detail-content p {
                margin-bottom: 1.5rem;
                color: #555;
                line-height: 1.8;
                text-align: justify;
            }

            .btn-back {
                display: block;
                width: fit-content;
                margin: 2rem auto 0 auto;
                background: #57B2F2;
                color: white;
                padding: 0.8rem 2rem;
                border: none;
                border-radius: 8px;
                font-size: 1rem;
                font-weight: bold;
                cursor: pointer;
                transition: background 0.3s, transform 0.2s;
                text-decoration: none;
            }

            .btn-back:hover {
                background: #4a9fe7;
                transform: translateY(-2px);
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
                .nav-menu {
                    display: none;
                }
                .main-content {
                    padding: 1.5rem;
                    margin: 1rem;
                }
                .news-image-container {
                    height: 200px; 
                }
                .news-detail-title {
                    font-size: 1.8rem;
                }
                .footer-content {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                }
            }
        </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('images/Jembatan_Asa.jpg') }}" alt="Jembatan Asa Logo">
            <span class="logo-text">JEMBATAN ASA</span>
        </div>
        <nav class="navbar">
            <ul class="nav-menu">
                <li><a href="{{ route('landing') }}">Kembali</a></li>
                <li><a href="#social">Media Sosial</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="news-image-container">
            @if ($berita->foto)
                <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}">
            @else
                <img src="/placeholder.svg?height=350&width=800" alt="{{ $berita->judul }}">
            @endif
        </div>

        <h1 class="news-detail-title">{{ $berita->judul }}</h1>

        <div class="news-detail-content">
            {!! nl2br(e($berita->deskripsi)) !!}
        </div>
    </main>

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
</body>
</html>
