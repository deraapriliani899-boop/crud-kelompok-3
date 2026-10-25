<h1>Detail Alat</h1>

<p>No: {{ $barang->id }}</p>
<p>Nama Alat: {{ $barang->nama_alat }}</p>
<p>Kategori: {{ $barang->kategori }}</p>
<p>Kondisi: {{ $barang->kondisi }}</p>
<p>Harga: {{ number_format($barang -> harga, 0, ',', '.') }}</p>
<p>Stok: {{ $barang->stok }}</p>

<br>
<a href="{{ route('barangs.index')}}">Kembali ke Daftar</a>
