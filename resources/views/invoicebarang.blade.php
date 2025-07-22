<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Donasi Barang - Jembatan Asa</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
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

        /* Invoice Container */
        .invoice-container {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        .invoice-title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 2rem;
        }

        /* Invoice Header Info */
        .invoice-header {
            margin-bottom: 2rem;
        }

        .invoice-info {
            margin-bottom: 0.5rem;
            color: #333;
        }

        /* Section Titles */
        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin: 2rem 0 1rem 0;
        }

        /* Donor Information */
        .donor-info {
            margin-bottom: 0.8rem;
            color: #333;
        }

        /* Donation Details Table */
        .donation-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }

        .donation-table th,
        .donation-table td {
            border: 1px solid #ddd;
            padding: 1rem;
            text-align: left;
        }

        .donation-table th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #333;
        }

        .donation-table td {
            color: #666;
        }

        /* Notes Section */
        .notes-section {
            margin: 2rem 0;
        }

        .notes-list {
            margin-left: 1rem;
            color: #666;
        }

        .notes-list li {
            margin-bottom: 0.5rem;
        }

        /* Buttons */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-back {
            background: #57B2F2;
            color: white;
        }

        .btn-back:hover {
            background: #4a9fe7;
            transform: translateY(-2px);
        }

        .btn-print {
            background: #27ae60;
            color: white;
        }

        .btn-print:hover {
            background: #229954;
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* Print Icon */
        .print-icon {
            width: 16px;
            height: 16px;
            background: currentColor;
            mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6,9 6,2 18,2 18,9'/%3E%3Cpath d='M6,18H4a2,2,0,0,1-2-2V11a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2H18'/%3E%3Crect x='6' y='14' width='12' height='8'/%3E%3C/svg%3E") no-repeat center;
            mask-size: contain;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .invoice-container {
                margin: 1rem;
                padding: 2rem;
            }

            .donation-table {
                font-size: 0.9rem;
            }

            .donation-table th,
            .donation-table td {
                padding: 0.8rem;
            }

            .button-container {
                flex-direction: column;
            }
        }

        /* Print Styles */
        @media print {
            .header,
            .button-container {
                display: none !important;
            }

            body {
                background: white;
            }

            .main-content {
                padding: 0;
                min-height: auto;
            }

            .invoice-container {
                box-shadow: none;
                border: 1px solid #ddd;
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
        <nav>
            <ul class="nav-menu">
                <li><a href="{{ route('landing') }}">Kembali</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="invoice-container" id="invoice-content">
    <h1 class="invoice-title">Invoice Donasi</h1>

    <!-- Invoice Header -->
    <div class="invoice-header">
        <div class="invoice-info">Website: Jembatan Asa</div>
        <div class="invoice-info">Nomor Invoice: INV/{{ now()->format('Ymd') }}/{{ $donasi->id }}</div>
        <div class="invoice-info">Tanggal: {{ \Carbon\Carbon::parse($donasi->created_at)->format('d F Y') }}</div>
    </div>

    <!-- Donor Information -->
    <div class="section-title">Informasi Donatur</div>
    <div class="donor-info">Nama Lengkap : {{ $donasi->nama_lengkap }}</div>
    <div class="donor-info">Email/No. WA : {{ $donasi->kontak }}</div>

    <!-- Donation Details -->
    <div class="section-title">Detail Donasi :</div>
    <table class="donation-table">
        <tr>
            <td>Jenis Donasi</td>
            <td>
                {{ $donasi->jenis_donasi === 'lainnya' ? $donasi->jenis_donasi_lainnya : ucfirst($donasi->jenis_donasi) }}
            </td>
        </tr>
        <tr>
            <td>Deskripsi Barang</td>
            <td>{{ $donasi->deskripsi_barang }}</td>
        </tr>
        <tr>
            <td>Alamat Pengirim</td>
            <td>{{ $donasi->alamat_pengirim }}</td>
        </tr>
    </table>

    <!-- Notes -->
    <div class="section-title">Catatan :</div>
    <ul class="notes-list">
        <li>Terima kasih atas donasi Anda. Donasi ini akan digunakan untuk kegiatan kemanusiaan sesuai dengan misi kami.</li>
        <li>Jika Anda membutuhkan bantuan lebih lanjut, silakan hubungi kami melalui kontak resmi di website ini.</li>
    </ul>

    <!-- Buttons -->
    <div class="button-container">
        <a href="{{ route('landing') }}" class="btn btn-back">Kembali</a>
        <button class="btn btn-print" onclick="downloadPDF()">
            <span class="print-icon"></span>
            Print
        </button>
    </div>
</div>
    </main>
    <script>
    function downloadPDF() {
        window.print();
    }
</script>
</body>
</html>