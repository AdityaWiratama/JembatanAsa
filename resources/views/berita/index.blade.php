<div class="container">
    <h1>Daftar Berita</h1>
    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">+ Tambah Berita</a>

    @foreach ($beritas as $berita)
        <div class="card mb-4">
            @if($berita->foto)
                <img src="{{ asset('storage/' . $berita->foto) }}" class="card-img-top" style="max-height: 300px; object-fit: cover;">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text">{{ Str::limit($berita->deskripsi, 150) }}</p>
                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>