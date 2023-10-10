<?php

//memanggil class database
include '../classes/database.php';
//instansiasi class database
$db = new database;
?>

<h3>Data Dosen</h3>
<a href="input_mhs.php">Tambah Dosen</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nidn</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($db->tampil_dosen() as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>