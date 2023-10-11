<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>
<link rel="stylesheet" href="/pweb2/jobsheet5/views/mahasiswa/tabel.css">

<div class="px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary" href="tambah_dosen">Tambah Dosen</a>


<table id="design" class="table">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($dosen as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tempat_lahir'] ?></td>
            <td><?php echo $x['tanggal_lahir'] ?></td>
            <td><?php echo $x['jenis_kelamin'] ?></td>
            <td><?php echo $x['agama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit_dosen/<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus_dosen/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>

</div>