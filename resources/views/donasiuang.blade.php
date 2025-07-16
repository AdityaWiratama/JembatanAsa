<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Donasi Uang - Jembatan Asa</title>
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

        /* Main Content */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 200px);
            padding: 2rem;
        }

        /* Form Container */
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-title {
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .required {
            color: #e74c3c;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            background: #f8f9fa;
        }

        .form-input:focus {
            outline: none;
            border-color: #57B2F2;
            box-shadow: 0 0 0 3px rgba(87, 178, 242, 0.1);
            background: white;
        }

        .form-input::placeholder {
            color: #aaa;
        }

        /* Dropdown Styles */
        .dropdown-container {
            position: relative;
        }

        .dropdown {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            background: #f8f9fa;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .dropdown:focus {
            outline: none;
            border-color: #57B2F2;
            box-shadow: 0 0 0 3px rgba(87, 178, 242, 0.1);
            background-color: white;
        }

        /* Textarea */
        .form-textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            min-height: 120px;
            resize: vertical;
            font-family: inherit;
            background: #f8f9fa;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-textarea:focus {
            outline: none;
            border-color: #57B2F2;
            box-shadow: 0 0 0 3px rgba(87, 178, 242, 0.1);
            background: white;
        }

        .form-textarea::placeholder {
            color: #aaa;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            background: #57B2F2;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: #4a9fe7;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #57B2F2 0%, #FF009D 100%);
            padding: 3rem 2rem 2rem;
            color: white;
            margin-top: auto;
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
            .nav-menu {
                display: none;
            }

            .form-container {
                margin: 1rem;
                padding: 2rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        /* Form Validation */
        .form-input:invalid {
            border-color: #e74c3c;
        }

        .form-input:valid {
            border-color: #27ae60;
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

    <!-- Main Content -->
    <main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Formulir Donasi Uang</h1>
            <p class="form-subtitle">Silahkan isi semua informasi yang diperlukan dengan akurat</p>
            
            <form id="donationForm" onsubmit="handleSubmit(event)">
                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label for="fullName" class="form-label">Nama Lengkap <span class="required">*</span></label>
                    <input 
                        type="text" 
                        id="fullName" 
                        name="fullName" 
                        class="form-input" 
                        placeholder="Masukkan Nama Lengkap"
                        required
                    >
                </div>

                <!-- Email/No. WA -->
                <div class="form-group">
                    <label for="contact" class="form-label">Email/No. WA <span class="required">*</span></label>
                    <input 
                        type="text" 
                        id="contact" 
                        name="contact" 
                        class="form-input" 
                        placeholder="Masukkan Email/No. WA"
                        required
                    >
                </div>

                <!-- Donasi Kemana -->
                <div class="form-group">
                    <label for="donationTarget" class="form-label">Donasi Kemana <span class="required">*</span></label>
                    <select id="donationTarget" name="donationTarget" class="dropdown" required>
                        <option value="">Pilih Program Donasi</option>
                        <option value="bencana">Donasi Posko Hangat untuk Terdampak Bencana</option>
                        <option value="makanan-gorontalo">9.000 Paket Makanan untuk Korban Banjir Gorontalo</option>
                        <option value="anak-gaza">Anak-Anak Membutuhkan Bantuan Anda</option>
                        <option value="siap-siaga">Indonesia Siap Siaga (Persiapan Bencana Alam)</option>
                        <option value="pendidikan-yatim">Bantuan Pendidikan Anak Yatim</option>
                        <option value="wakaf-masjid">Wakaf Pembangunan Masjid</option>
                        <option value="kesehatan">Program Kesehatan dan Pengobatan</option>
                        <option value="makanan-harian">Sedekah Makanan Harian</option>
                    </select>
                </div>

                <!-- Nominal -->
                <div class="form-group">
                    <label for="amount" class="form-label">Nominal <span class="required">*</span></label>
                    <input 
                        type="number" 
                        id="amount" 
                        name="amount" 
                        class="form-input" 
                        placeholder="Masukkan Nominal"
                        min="10000"
                        required
                    >
                </div>

                <!-- Metode Pembayaran -->
                <div class="form-group">
                    <label for="paymentMethod" class="form-label">Metode Pembayaran <span class="required">*</span></label>
                    <select id="paymentMethod" name="paymentMethod" class="dropdown" required>
                        <option value="">Pilih Metode Pembayaran</option>
                        <optgroup label="E-Wallet">
                            <option value="shopeepay">ShopeePay</option>
                            <option value="dana">DANA</option>
                            <option value="ovo">OVO</option>
                        </optgroup>
                        <optgroup label="Bank Transfer">
                            <option value="bri">Bank BRI</option>
                            <option value="bni">Bank BNI</option>
                            <option value="bca">Bank BCA</option>
                            <option value="mandiri">Bank Mandiri</option>
                        </optgroup>
                    </select>
                </div>

                <!-- Catatan Tambahan -->
                <div class="form-group">
                    <label for="notes" class="form-label">Catatan Tambahan <span class="required">*</span></label>
                    <textarea 
                        id="notes" 
                        name="notes" 
                        class="form-textarea" 
                        placeholder="Masukkan Catatan Tambahan"
                        required
                    ></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">Selesai</button>
            </form>
        </div>
    </main>

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

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);
            
            // Format amount as currency
            const amount = parseInt(data.amount);
            const formattedAmount = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(amount);
            
            // Show confirmation
            alert(`Terima kasih ${data.fullName}!\n\nDetail Donasi:\n- Program: ${data.donationTarget}\n- Nominal: ${formattedAmount}\n- Metode: ${data.paymentMethod}\n- Kontak: ${data.contact}\n\nDonasi Anda akan segera diproses.`);
            
            // Here you would typically send the data to your backend
            console.log('Donation Data:', data);
            
            // Reset form
            event.target.reset();
        }

        // Format number input as currency
        document.getElementById('amount').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value) {
                // Add thousand separators
                value = parseInt(value).toLocaleString('id-ID');
            }
        });

        // Form validation feedback
        const inputs = document.querySelectorAll('.form-input, .dropdown, .form-textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.checkValidity()) {
                    this.style.borderColor = '#27ae60';
                } else {
                    this.style.borderColor = '#e74c3c';
                }
            });
            
            input.addEventListener('input', function() {
                if (this.checkValidity()) {
                    this.style.borderColor = '#27ae60';
                } else {
                    this.style.borderColor = '#ddd';
                }
            });
        });
    </script>
</body>
</html>
