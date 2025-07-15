<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jembatan Asa</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-[Inter] bg-white text-gray-800">

  <!-- Header -->
<header class="flex items-center justify-between px-6 py-4 shadow-md bg-white">
  <div class="flex items-center gap-3">
    <img src="/images/Jembatan_Asa.jpg" alt="Logo" class="h-10 w-auto">
    <span class="text-xl font-bold text-[#57B2F2]">Jembatan Asa</span>
  </div>
  <nav class="flex gap-6 font-medium">
    <a href="#tentang" class="hover:text-[#57B2F2]">Tentang Kami</a>
    <a href="#program" class="hover:text-[#57B2F2]">Program Kami</a>
    <a href="#sosmed" class="hover:text-[#57B2F2]">Media Sosial</a>
  </nav>
</header>

  <!-- Hero Section -->
  <section class="relative bg-white">
    <div class="relative h-auto md:h-[650px] overflow-hidden rounded-2xl mx-4 my-6 shadow-lg flex flex-col md:flex-row">
      <div class="w-full md:w-1/2 flex items-center justify-center px-6 md:px-10 py-10 md:py-0 z-10">
        <div class="max-w-xl">
          <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
            Berbagi Kebaikan,<br />
            Wujudkan <span class="text-[#57B2F2]">Harapan</span> Sesama
          </h1>
          <p class="mt-4 text-base md:text-lg text-[#57B2F2] font-medium tracking-wide">
            #MENGALIRKANKEBAIKAN
          </p>
          <a href="#donasi"
            class="mt-6 inline-flex items-center gap-2 bg-pink-600 hover:bg-pink-700 text-white font-semibold text-lg px-7 py-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
            ❤️ Donasi Sekarang
          </a>
        </div>
      </div>
      <div class="relative w-full md:w-1/2 h-[400px] md:h-full overflow-hidden rounded-r-2xl">
        <img src="{{ asset('images/berbagi beras.jpg') }}" alt="Taman Zakat"
          class="absolute inset-0 w-full h-full object-cover object-center scale-[1.1] brightness-[1.1] contrast-[1.1] z-0" />
        <div class="absolute inset-0 z-10 bg-gradient-to-l from-white/70 via-transparent to-transparent"></div>
        <div class="absolute inset-0 z-20 pointer-events-none rounded-r-2xl"
          style="background: radial-gradient(ellipse at 70% 60%, rgba(255,255,255,0) 20%, rgba(0,0,0,0.3) 80%);">
        </div>
      </div>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="py-16 bg-gray-50 text-center">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Tentang Kami</h2>
      <p class="text-gray-600 text-lg leading-relaxed">
        Taman Zakat adalah lembaga pengelola zakat, infak, dan sedekah yang berkomitmen untuk menghadirkan program-program sosial
        yang bermanfaat bagi masyarakat luas. Dengan semangat #MengalirkanKebaikan, kami terus berupaya menjadi jembatan kebaikan
        antara para donatur dan penerima manfaat, melalui program-program yang transparan, amanah, dan tepat sasaran.
      </p>
      <div class="mt-8 flex justify-center">
        <a href="#tentang" class="bg-[#57B2F2] hover:bg-blue-500 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300 shadow-lg">
          Bergabung Bersama Kami
        </a>
      </div>
    </div>
  </section>

  <!-- Program Unggulan -->
<section id="program" class="py-16 bg-white text-center">
  <div class="max-w-6xl mx-auto px-4">
    <h3 class="text-3xl font-bold text-gray-800 mb-12">Program Unggulan Kami</h3>

    <div class="flex space-x-6 overflow-x-auto pb-4">
      <!-- CARD TEMPLATE -->
      <!-- Gunakan ini untuk semua card -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden text-left min-w-[300px]">
        <img src="/images/Program_Palestina.jpg" alt="Program Palestina" class="w-full h-52 object-cover">
        <div class="p-6">
          <h4 class="text-xl font-semibold text-[#57B2F2] mb-2">PROGRAM PALESTINA</h4>
          <p class="text-gray-700 mb-4">Bantuan kemanusiaan untuk saudara-saudara kita di Palestina yang membutuhkan dukungan dalam situasi krisis.</p>
          <a href="https://donasi.tamanzakat.org/palestina/" class="inline-block px-4 py-2 bg-[#DA336B] text-white font-semibold rounded hover:bg-[#c12d5f] transition">Kunjungi</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden text-left min-w-[300px]">
        <img src="/images/Tebar manfaat Qur'an.jpg" alt="Program Sedekah Qur'an" class="w-full h-52 object-cover">
        <div class="p-6">
          <h4 class="text-xl font-semibold text-[#57B2F2] mb-2">TEBAR MANFAAT QURAN</h4>
          <p class="text-gray-700 mb-4">Mendistribusikan Al-Qur'an ke seluruh penjuru negeri untuk masyarakat yang membutuhkan akses terhadap kitab suci.</p>
          <a href="https://donasi.tamanzakat.org/campaign/tebar-manfaat-quran" class="inline-block px-4 py-2 bg-[#DA336B] text-white font-semibold rounded hover:bg-[#c12d5f] transition">Kunjungi</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden text-left min-w-[300px]">
        <img src="/images/Sumur Bor.jpg" alt="Program Sedekah Sumur Bor" class="w-full h-52 object-cover">
        <div class="p-6">
          <h4 class="text-xl font-semibold text-[#57B2F2] mb-2">PROGRAM SEDEKAH SUMUR BOR</h4>
          <p class="text-gray-700 mb-4">Membangun sumur bor di daerah kekeringan untuk menyediakan akses air bersih bagi masyarakat yang kesulitan mendapatkan air.</p>
          <a href="#" class="inline-block px-4 py-2 bg-[#DA336B] text-white font-semibold rounded hover:bg-[#c12d5f] transition">Kunjungi</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden text-left min-w-[300px]">
        <img src="/images/sedekah-beras-rakyat.jpg" alt="Sedekah Beras Rakyat" class="w-full h-52 object-cover">
        <div class="p-6">
          <h4 class="text-xl font-semibold text-[#57B2F2] mb-2">SEDEKAH BERAS RAKYAT</h4>
          <p class="text-gray-700 mb-4">Membagikan beras kepada masyarakat kurang mampu agar mereka bisa mencukupi kebutuhan pangan sehari-hari.</p>
          <a href="https://donasi.tamanzakat.org/campaign/sedekah-beras" class="inline-block px-4 py-2 bg-[#DA336B] text-white font-semibold rounded hover:bg-[#c12d5f] transition">Kunjungi</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden text-left min-w-[300px]">
        <img src="/images/beasiswa-bintang.jpg" alt="Beasiswa Bintang" class="w-full h-52 object-cover">
        <div class="p-6">
          <h4 class="text-xl font-semibold text-[#57B2F2] mb-2">BEASISWA BINTANG</h4>
          <p class="text-gray-700 mb-4">Memberikan bantuan pendidikan bagi anak-anak berprestasi dari keluarga kurang mampu.</p>
          <a href="https://donasi.tamanzakat.org/campaign/beasiswa-bintang" class="inline-block px-4 py-2 bg-[#DA336B] text-white font-semibold rounded hover:bg-[#c12d5f] transition">Kunjungi</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden text-left min-w-[300px]">
        <img src="/images/Layanan Ambulance.jpg" alt="Layanan Ambulance Gratis" class="w-full h-52 object-cover">
        <div class="p-6">
          <h4 class="text-xl font-semibold text-[#57B2F2] mb-2">LAYANAN AMBULANCE GRATIS</h4>
          <p class="text-gray-700 mb-4">Memberikan layanan ambulance gratis untuk membantu masyarakat dalam keadaan darurat medis.</p>
          <a href="https://donasi.tamanzakat.org/campaign/layanan-ambulance-gratis" class="inline-block px-4 py-2 bg-[#DA336B] text-white font-semibold rounded hover:bg-[#c12d5f] transition">Kunjungi</a>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Formulir Donasi -->
  <section id="daftar" class="bg-gray-100 py-12 px-6">
    <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow">
      <h3 class="text-xl font-bold mb-4 text-center">Formulir Zakat</h3>
      <p class="text-center mb-6">Silakan isi semua informasi yang diperlukan dengan akurat</p>
      <form action="{{ route('donation.store') }}" method="POST">
        @csrf
        <label class="block mb-4">
          <span class="block mb-1">Nama Lengkap *</span>
          <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" required name="nama" placeholder="nama lengkap">
        </label>
        <label class="block mb-4">
          <span class="block mb-1">Nomor Telepon *</span>
          <input type="tel" class="w-full border border-gray-300 rounded px-4 py-2" required name="telepon" placeholder="nomor telepon">
        </label>
        <label class="block mb-6">
          <span class="block mb-1">Alamat domisili</span>
          <textarea class="w-full border border-gray-300 rounded px-4 py-2" required name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
        </label>
        <a href="https://wa.me/6282230099009">
          <button class="bg-[#DA336B] text-white px-8 py-3 text-lg rounded hover:bg-[#c12d5f]">Kirim</button>
        </a>
      </form>
    </div>
  </section>

 <!-- Section Sosial Media -->
<section class="py-16 px-4 bg-white text-center" id="sosmed">
  <h2 class="text-2xl md:text-3xl font-bold mb-10 text-gray-800">Kunjungi Kami Di</h2>

  <div class="flex flex-col md:flex-row justify-center items-center gap-6 md:gap-10">

    <!-- Instagram -->
    <a href="https://instagram.com/tamanzakat" target="_blank"
       class="bg-gray-200 rounded-xl p-6 w-56 flex flex-col items-center shadow hover:scale-105 transition">
      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
           alt="Instagram" class="w-10 h-10 mb-3">
      <span class="font-semibold text-sm text-gray-800">@tamanzakat</span>
    </a>

    <!-- YouTube -->
    <a href="https://youtube.com/@tamanzakat" target="_blank"
       class="bg-gray-200 rounded-xl p-6 w-56 flex flex-col items-center shadow hover:scale-105 transition">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/YouTube_full-color_icon_%282017%29.svg"
           alt="YouTube" class="w-10 h-10 mb-3">
      <span class="font-semibold text-sm text-gray-800">TAMAN ZAKAT</span>
    </a>

    <!-- TikTok -->
    <a href="https://tiktok.com/@taman.zakat" target="_blank"
       class="bg-gray-200 rounded-xl p-6 w-56 flex flex-col items-center shadow hover:scale-105 transition">
      <img src="https://cdn-icons-png.flaticon.com/512/3046/3046121.png"
           alt="TikTok" class="w-10 h-10 mb-3">
      <span class="font-semibold text-sm text-gray-800">@taman.zakat</span>
    </a>

  </div>
</section>

<!-- Footer -->
<footer class="bg-[#57B2F2] text-white py-10 px-6">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-8">
    <!-- Kontak -->
    <div>
      <h4 class="text-lg font-semibold mb-4">Contact</h4>
      <ul class="space-y-2 text-sm">
        <li class="flex items-start gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8 2 5 5 5 9c0 3.74 4.4 8.14 6.6 10.28.76.74 1.64.74 2.4 0C14.6 17.14 19 12.74 19 9c0-4-3-7-7-7z"/>
          </svg>
          <span>Jl. Wisma Trosobo IV No. 33 Trosobo, Taman, Sidoarjo</span>
        </li>
        <li class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M16 12H8m0 0l4 4m-4-4l4-4m8 4a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>mail@tamanzakat.org</span>
        </li>
        <li class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.45l.516 2.06a2 2 0 01-.416 1.855L8.83 11.17a11.042 11.042 0 005.01 5.01l2.81-2.81a2 2 0 011.856-.416l2.06.516a2 2 0 011.45 1.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
          <span>082230099009</span>
        </li>
      </ul>
    </div>
  </div>

  <!-- Copyright -->
  <div class="mt-8 border-t border-white/30 pt-4 text-center text-sm">
    &copy; 2024 Portal Zakat. Semua hak dilindungi. | Dibuat dengan <span class="text-red-400">💖</span> untuk Umat
  </div>
</footer>