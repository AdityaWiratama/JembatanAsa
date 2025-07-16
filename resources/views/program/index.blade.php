<h2>Daftar Program Donasi</h2>

<a href="{{ route('program.create') }}">Tambah Program</a>

<ul>
    @foreach($programs as $program)
        <li>
            <strong>{{ $program->nama_program }}</strong><br>
            <a href="{{ route('program.edit', $program->id) }}">Edit</a>
            <form action="{{ route('program.destroy', $program->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
