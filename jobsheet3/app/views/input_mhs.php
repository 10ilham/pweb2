<link rel="stylesheet" href="../views/css/tabel.css">

<body>
    <h3>Tambah Data Mahasiswa</h3>
    <div>
        <form action="proses_mhs.php?aksi=tambah" method="post">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" placeholder="Masukkan NIM..">

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama..">

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat.."></textarea>

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
