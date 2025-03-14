<h1>Daftar Buku</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<a href="{{ route('buku.create') }}">Tambah Buku</a>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Jenis</th>
        <th>Tahun</th>
        <th>Sampul</th>
        <th>Aksi</th>
    </tr>
    @foreach ($bukus as $buku)
    <tr>
        <td>{{ $buku->judul_buku }}</td>
        <td>{{ $buku->pengarang }}</td>
        <td>{{ $buku->jenis_buku }}</td>
        <td>{{ $buku->tahun_terbit }}</td>
        <td>
            @if($buku->sampul)
                <img src="{{ asset('storage/' . $buku->sampul) }}" width="50">
            @endif
        </td>
        <td>
            <a href="{{ route('buku.edit', $buku->id_buku) }}">Edit</a>
            <form action="{{ route('buku.destroy', $buku->id_buku) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
