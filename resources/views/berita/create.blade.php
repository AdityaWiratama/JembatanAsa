<form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Judul:</label>
    <input type="text" name="judul" required>

    <label>Deskripsi:</label>
    <textarea name="deskripsi" required></textarea>

    <label>Foto:</label>
    <input type="file" name="foto">

    <button type="submit">Simpan</button>
</form>