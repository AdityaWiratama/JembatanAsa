<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Donasi Barang - Jembatan Asa</title>
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

            .form-group.hidden {
                display: none;
            }

            .form-group.show {
                display: block;
                animation: slideDown 0.3s ease-out;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
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
                background: linear-gradient(135deg, #1F4995 0%, #57B2F2 50%, #ffffff 100%);
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

            .social-icon img {
                width: 24px;
                height: 24px;
                object-fit: contain;
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

            .dropdown:invalid {
                border-color: #e74c3c;
            }

            .dropdown:valid {
                border-color: #27ae60;
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
        <nav>
            <ul class="nav-menu">
                <li><a href="{{ route('landing') }}">Kembali</a></li>
                <li><a href="#social">Media Sosial</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="form-container">
        <h1 class="form-title">Formulir Donasi Barang</h1>
        <p class="form-subtitle">Silahkan isi semua informasi yang diperlukan dengan akurat</p>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form id="donationForm" method="POST" action="{{ route('donasi.barang.store') }}">
            @csrf

            <!-- Nama Lengkap -->
            <div class="form-group">
                <label for="fullName" class="form-label">Nama Lengkap <span class="required">*</span></label>
                <input type="text" id="fullName" name="nama_lengkap" class="form-input" placeholder="Masukkan Nama Lengkap" required>
            </div>

            <!-- Email/No. WA -->
            <div class="form-group">
                <label for="contact" class="form-label">Email/No. WA <span class="required">*</span></label>
                <input type="text" id="contact" name="kontak" class="form-input" placeholder="Masukkan Email/No. WA" required>
            </div>

            <!-- Donasi Kemana -->
            <div class="form-group">
                <label for="donationTarget" class="form-label">Donasi Kemana <span class="required">*</span></label>
                <select id="donationTarget" name="program_donasi_id" class="dropdown" required>
                    <option value="">Pilih Program Donasi</option>
                    @foreach ($programs as $program)
                        <option value="{{ $program->id }}"
                            {{ isset($selectedProgramId) && $selectedProgramId == $program->id ? 'selected' : '' }}>
                            {{ $program->nama_program }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Jenis Donasi -->
            <div class="form-group">
                <label for="donationType" class="form-label">Jenis Donasi <span class="required">*</span></label>
                <select id="donationType" name="jenis_donasi" class="dropdown" required onchange="toggleOtherField()">
                    <option value="">Pilih Jenis Donasi</option>
                    <option value="sembako">Sembako</option>
                    <option value="pakaian layak pakai">Pakaian Layak Pakai</option>
                    <option value="perlengkapan bayi">Perlengkapan Bayi</option>
                    <option value="alat sekolah">Alat Sekolah</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Barang Lainnya -->
            <div class="form-group hidden" id="otherItemGroup">
                <label for="otherItem" class="form-label">Barang Lainnya <span class="required">*</span></label>
                <input type="text" id="otherItem" name="jenis_donasi_lainnya" class="form-input" placeholder="Sebutkan barang lainnya">
            </div>

            <!-- Deskripsi Barang -->
            <div class="form-group">
                <label for="itemDescription" class="form-label">Deskripsi Barang <span class="required">*</span></label>
                <input type="text" id="itemDescription" name="deskripsi_barang" class="form-input" placeholder="Masukkan Jenis Barang" required>
            </div>

            <!-- Alamat Pengirim -->
            <div class="form-group">
                <label for="alamat_pengirim" class="form-label">Alamat Pengirim <span class="required">*</span></label>
                <textarea id="alamat_pengirim" name="alamat_pengirim" class="form-textarea" placeholder="Masukkan Alamat Lengkap" required></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="submit-btn">Selesai</button>
        </form>
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


    <script>
        function toggleOtherField() {
            const donationType = document.getElementById('donationType').value;
            const otherItemGroup = document.getElementById('otherItemGroup');
            const otherItemInput = document.getElementById('otherItem');
            
            if (donationType === 'lainnya') {
                otherItemGroup.classList.remove('hidden');
                otherItemGroup.classList.add('show');
                otherItemInput.required = true;
            } else {
                otherItemGroup.classList.add('hidden');
                otherItemGroup.classList.remove('show');
                otherItemInput.required = false;
                otherItemInput.value = '';
            }
        }

        function handleSubmit(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);
            
            // Get donation type display text
            const donationTypeSelect = document.getElementById('donationType');
            const donationTypeText = donationTypeSelect.options[donationTypeSelect.selectedIndex].text;
            
            // Get donation target display text
            const donationTargetSelect = document.getElementById('donationTarget');
            const donationTargetText = donationTargetSelect.options[donationTargetSelect.selectedIndex].text;
            
            // Build confirmation message
            let confirmationMessage = `Terima kasih ${data.fullName}!\n\nDetail Donasi Barang:\n- Program: ${donationTargetText}\n- Jenis Donasi: ${donationTypeText}`;
            
            if (data.donationType === 'lainnya' && data.otherItem) {
                confirmationMessage += `\n- Barang Lainnya: ${data.otherItem}`;
            }
            
            confirmationMessage += `\n- Deskripsi: ${data.itemDescription}\n- Kontak: ${data.contact}\n- Catatan: ${data.notes}\n\nDonasi barang Anda akan segera diproses.`;
            
            // Show confirmation
            alert(confirmationMessage);
            
            // Here you would typically send the data to your backend
            console.log('Goods Donation Data:', data);
            
            // Reset form
            event.target.reset();
            toggleOtherField(); // Reset the other field visibility
        }

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

        // Initialize form
        document.addEventListener('DOMContentLoaded', function() {
            toggleOtherField(); // Ensure other field is hidden on load
        });
    </script>
</body>
</html>
