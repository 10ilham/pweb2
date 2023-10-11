<link rel="stylesheet" href="style.css">

<body>
    <h3>Tambah Data Mahasiswa</h3>
    <div>
        <form action="proses" method="post">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM..">

            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama..">

            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" placeholder="Masukkan Nama..">

            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" placeholder="Masukkan Nama..">

            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label>Agama</label>
            <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat.."></textarea>

            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>
</body>
