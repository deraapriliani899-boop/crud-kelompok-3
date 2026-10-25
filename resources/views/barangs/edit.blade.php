
<h1>Edit Alat - {{ $barang->nama_alat }}</h1>

<form action="{{ route('barangs.update', $barang->id)}}" method="POST">
@csrf
@method('PUT')

Nama Alat: <br>
<input type="text" name="nama_alat" value="{{ $barang->nama_alat }}" required><br><br>

<div class="mb-3">
    <label>Kategori</label>
    <select name="kategori" class="form-control" required>
        <option value="Kimia" {{ $barang->kategori == 'Kimia' ? 'selected' : '' }}>Kimia</option>
        <option value="Biologi" {{ $barang->kategori == 'Biologi' ? 'selected' : '' }}>Biologi</option>
        <option value="Fisika" {{ $barang->kategori == 'Fisika' ? 'selected' : '' }}>Fisika</option>
        <option value="Umum" {{ $barang->kategori == 'Umum' ? 'selected' : '' }}>Umum</option>
    </select>
</div>

<br><br>

<div class="mb-3">
        <label>Kondisi</label>
        <select name="kondisi" class="form-controll" required>
            <option value="Baik" {{ $barang->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak Ringan" {{ $barang->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
            <option value="Rusak Berat" {{ $barang->kondisi == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
        </select>
    </div>

<br><br>

Harga : <br>
<input type="number" name="harga" value="{{ $barang->harga }}" required><br><br>

Stok : <br>
<input type="number" name="stok" value="{{ $barang->stok }}" required><br><br>

<button type="submit">Update</button>
<a href="{{ route('barangs.index')}}">Batal</a>
</form>
</div>
