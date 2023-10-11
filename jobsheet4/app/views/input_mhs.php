<?php
    session_start();
?>
<link rel="stylesheet" href="../views/css/tabel.css">
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <div>
        <form action="proses_mhs.php?aksi=tambah" method="post">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM..">

            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama..">

            <label>Alamat</label>
            <textarea name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat.."></textarea>

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>