<?php
include "../classes/database.php";
$db = new database();
?>
<link rel="stylesheet" href="../views/css/tabel.css">

<body>
<h3>Edit Data Mahasiswa</h3>
<div>

<!-- <form action="proses_mhs.php?aksi=update" method="post"> -->
<form action="proses_mhs.php?aksi=update" method="post">

    <?php
    foreach ($db->edit($_GET['id']) as $d) {
    ?>

            <label>NIM</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>">

            <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $d['nama'] ?>">

            <label>Alamat</label>    
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>

                <input type="submit" value="Simpan">


    <?php
    }
    ?>

</form>
</div>
</body>