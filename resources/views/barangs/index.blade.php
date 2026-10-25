<h1>🧪Daftar Alat Laboratorium</h1>
     <a href="{{ route('barangs.create')}}" style="background: #16a34a; color:white; padding:8px 15px;border-radius:6px;">+Tambah Alat Lab</a>
<br><br>
@session('success')
<div style="background:#dcfce7; color:#166534; padding:10px; border-radius:6px; margin-top:15px;">
    {{ session('success')}}
</div>
@endsession
     <table border="1" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Nama Alat</th>
            <th>Kategori</th>
            <th>Kondisi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach($barangs as $index => $barang)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $barang -> nama_alat }}</td>
            <td>{{ $barang -> kategori }}</td>
            <td>{{ $barang -> kondisi }}</td>
            <td>Rp {{ number_format($barang -> harga, 0, ',', '.') }}</td>
            <td>{{ $barang -> stok }}</td>
            <td>
                <a href="{{ route('barangs.show', $barang->id) }}">Lihat Detail</a> |
                <a href="{{ route('barangs.edit', $barang->id) }}">Edit</a> |
                <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus alat lab ini?')">
                        Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
     </table>
<br>
<h3>Total Alat: {{ $barangs->count() }} alat</h3>

