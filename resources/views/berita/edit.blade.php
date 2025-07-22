<div class="container">
    <h1>Edit Berita</h1>

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required>{{ $berita->deskripsi }}</textarea>
        </div>

        @if($berita->foto)
            <p>Foto saat ini:</p>
            <img src="{{ asset('storage/' . $berita->foto) }}" style="max-width: 200px;">
        @endif

        <div class="mb-3">
            <label for="foto" class="form-label">Ganti Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>