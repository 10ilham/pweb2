<?php
include "../classes/database.php";
$db = new database();
?>
<link rel="stylesheet" href="../views/css/tabel.css">

<body>
<h3>Edit Data Dosen</h3>
<div>

<!-- <form action="proses_dsn.php?aksi=update" method="post"> -->
<form action="proses_dsn.php?aksi=update" method="post">

    <?php
    foreach ($db->edit($_GET['id']) as $d) {
    ?>

            <label>NIDN</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nidn" value="<?php echo $d['nidn'] ?>">

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