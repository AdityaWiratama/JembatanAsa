<h2>Edit Program Donasi</h2>

<form action="{{ route('program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="nama_program" value="{{ $program->nama_program }}" required><br>
    <textarea name="deskripsi">{{ $program->deskripsi }}</textarea><br>
    <input type="number" name="target_donasi" value="{{ $program->target_donasi }}"><br>
    <input type="date" name="tanggal_mulai" value="{{ $program->tanggal_mulai }}"><br>
    <input type="date" name="tanggal_selesai" value="{{ $program->tanggal_selesai }}"><br>
    <input type="file" name="foto"><br>
    @if($program->foto)
        <img src="{{ asset('storage/' . $program->foto) }}" width="150"><br>
    @endif
    <button type="submit">Update</button>
</form>
