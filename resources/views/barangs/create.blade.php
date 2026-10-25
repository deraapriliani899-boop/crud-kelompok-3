
<h1>+Tambah Alat Lab</h1>

<form action="{{ route('barangs.store')}}" method="POST">
    @csrf

    <label>Nama Alat:</label><br>
    <input type="text" name="nama_alat" required>
<br><br>
    <label>Kategori</label>
    <select name="kategori" class="form-control" required>
        <option value="">Pilih Kategori</option>
        <option value="Kimia">Kimia</option>
        <option value="Biologi">Biologi</option>
        <option value="Fisika">Fisika</option>
        <option value="Umum">Umum</option>
    </select>

<br><br>
        <label>Kondisi</label>
        <select name="kondisi" class="form-controll" required>
            <option value="Baik">Baik</option>
            <option value="Rusak Ringan">Rusak Ringan</option>
            <option value="Rusak Berat">Rusak Berat</option>
        </select>

<br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga" required><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok" required><br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('barangs.index')}}">Kembali</a>
</form>
