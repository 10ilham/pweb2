<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

// instansiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:/pweb2/jobsheet5/dosen");
            } else {
                header("location:/pweb2/jobsheet5/edit");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>

<link rel="stylesheet" href="../style.css">

<body>
    <h3> Edit Data Dosen</h3>
    <div>
        <form action="" method="POST">

            <?php
            foreach ($dosenData as $d) {
            ?>

                <label>NIM</label>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nidn" value="<?php echo $d['nidn'] ?>">

                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $d['nama'] ?>">

                <label>Tempat lahir</label>
                <input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>">

                <label>Tanggal lahir</label>
                <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?>">

                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin">
                    <option value="L" <?php if ($d['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                    <option value="P" <?php if ($d['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                </select>

                <label>Agama</label>
                <select name="agama">
                    <option value="Islam" <?php if ($d['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if ($d['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Katolik" <?php if ($d['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                    <option value="Hindu" <?php if ($d['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if ($d['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                    <option value="Konghuchu" <?php if ($d['agama'] == 'Konghuchu') echo 'selected'; ?>>Konghuchu</option>
                </select>

                <label>Alamat</label>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>

                <input type="submit" name="submit" value="Simpan">

            <?php
            }
            ?>
        </form>
    </div>
</body>