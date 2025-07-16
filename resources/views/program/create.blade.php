<h2>Tambah Program Donasi</h2>

<form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama_program" placeholder="Nama Program" required><br>
    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br>
    <input type="number" name="target_donasi" placeholder="Target Donasi"><br>
    <input type="date" name="tanggal_mulai"><br>
    <input type="date" name="tanggal_selesai"><br>
    <input type="file" name="foto"><br>
    <button type="submit">Simpan</button>
</form>