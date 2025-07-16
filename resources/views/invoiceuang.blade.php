<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Donasi - Jembatan Asa</title>
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
        <div class="invoice-container" id="invoice-content">
            <h1 class="invoice-title">Invoice Donasi</h1>
            
            <!-- Invoice Header -->
            <div class="invoice-header">
                <div class="invoice-info">Website: Jembatan Asa</div>
                <div class="invoice-info">Nomor Invoice: <span id="invoiceNumber">INV/2025/0715/001</span></div>
                <div class="invoice-info">Tanggal: <span id="invoiceDate">15 Juli 2025</span></div>
            </div>

            <!-- Donor Information -->
            <div class="section-title">Informasi Donatur</div>
            <div class="donor-info">Nama Lengkap : <span id="donorName">[Nama Donatur]</span></div>
            <div class="donor-info">Email/No. WA : <span id="donorContact">[Email/No. WA Donatur]</span></div>

            <!-- Donation Details -->
            <div class="section-title">Detail Donasi :</div>
            <table class="donation-table">
                <thead>
                    <tr>
                        <th>Keterangan</th>
                        <th>Rincian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nominal Donasi</td>
                        <td id="donationAmount">Rp[Nominal]</td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td id="paymentMethod">[Transfer Bank / E-Wallet / dll]</td>
                    </tr>
                    <tr>
                        <td>Catatan Tambahan</td>
                        <td id="additionalNotes">[Jika Ada]</td>
                    </tr>
                    <tr>
                        <td><strong>Total Pembayaran</strong></td>
                        <td><strong id="totalPayment">Rp[Nominal]</strong></td>
                    </tr>
                </tbody>
            </table>

            <!-- Notes -->
            <div class="section-title">Catatan :</div>
            <ul class="notes-list">
                <li>Terima kasih atas donasi Anda. Donasi ini akan digunakan untuk kegiatan kemanusiaan sesuai dengan misi kami.</li>
                <li>Jika Anda membutuhkan bantuan lebih lanjut, silakan hubungi kami melalui kontak resmi di website ini.</li>
            </ul>

            <!-- Buttons -->
            <div class="button-container">
                <button class="btn btn-back" onclick="goBack()">Kembali</button>
                <button class="btn btn-print" onclick="downloadPDF()">
                    <span class="print-icon"></span>
                    Print
                </button>
            </div>
        </div>
    </main>

    <script>
        // Sample data - in real application, this would come from form submission or URL parameters
        const sampleData = {
            donorName: "Ahmad Budi Santoso",
            donorContact: "ahmad.budi@email.com / 081234567890",
            donationAmount: "Rp 500.000",
            paymentMethod: "Transfer Bank BCA",
            additionalNotes: "Semoga bermanfaat untuk saudara-saudara yang membutuhkan",
            totalPayment: "Rp 500.000"
        };

        // Function to populate invoice with data
        function populateInvoice(data) {
            document.getElementById('donorName').textContent = data.donorName;
            document.getElementById('donorContact').textContent = data.donorContact;
            document.getElementById('donationAmount').textContent = data.donationAmount;
            document.getElementById('paymentMethod').textContent = data.paymentMethod;
            document.getElementById('additionalNotes').textContent = data.additionalNotes;
            document.getElementById('totalPayment').textContent = data.totalPayment;
        }

        // Function to generate invoice number and date
        function generateInvoiceInfo() {
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const random = String(Math.floor(Math.random() * 1000)).padStart(3, '0');
            
            const invoiceNumber = `INV/${year}/${month}${day}/${random}`;
            const invoiceDate = now.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            
            document.getElementById('invoiceNumber').textContent = invoiceNumber;
            document.getElementById('invoiceDate').textContent = invoiceDate;
        }

        // Function to download PDF
        function downloadPDF() {
            const element = document.getElementById('invoice-content');
            const opt = {
                margin: 1,
                filename: `Invoice-Donasi-${document.getElementById('invoiceNumber').textContent.replace(/\//g, '-')}.pdf`,
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
            };

            // Hide buttons before generating PDF
            const buttons = document.querySelector('.button-container');
            buttons.style.display = 'none';

            html2pdf().set(opt).from(element).save().then(() => {
                // Show buttons again after PDF generation
                buttons.style.display = 'flex';
            });
        }

        // Function to go back
        function goBack() {
            if (window.history.length > 1) {
                window.history.back();
            } else {
                // If no history, redirect to main page
                window.location.href = 'index.html';
            }
        }

        // Function to get URL parameters
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            const results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Generate invoice info
            generateInvoiceInfo();
            
            // Try to get data from URL parameters first
            const urlData = {
                donorName: getUrlParameter('name') || sampleData.donorName,
                donorContact: getUrlParameter('contact') || sampleData.donorContact,
                donationAmount: getUrlParameter('amount') || sampleData.donationAmount,
                paymentMethod: getUrlParameter('payment') || sampleData.paymentMethod,
                additionalNotes: getUrlParameter('notes') || sampleData.additionalNotes,
                totalPayment: getUrlParameter('total') || sampleData.totalPayment
            };
            
            // Populate invoice with data
            populateInvoice(urlData);
        });

        // Print functionality for browsers that support it
        function printInvoice() {
            window.print();
        }

        // Add keyboard shortcut for printing (Ctrl+P)
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'p') {
                e.preventDefault();
                downloadPDF();
            }
        });
    </script>
</body>
</html>