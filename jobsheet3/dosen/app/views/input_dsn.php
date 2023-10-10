<link rel="stylesheet" href="../views/css/tabel.css">

<body>
    <h3>Tambah Data Dosen</h3>
    <div>
        <form action="proses_dsn.php?aksi=tambah" method="post">
            <label for="nidn">NIDN</label>
            <input type="text" name="nidn" placeholder="Masukkan nidn..">

            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama..">

            <label for="alamat">Alamat</label>
            <textarea name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat.."></textarea>

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
