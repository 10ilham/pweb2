<?php
include "../classes/database.php";
session_start();

$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $_SESSION['eksekusi'] = "Data berhasil ditambahkan!";
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php");
} elseif ($aksi == "update") {
    $_SESSION['eksekusi'] = "Data berhasil diedit!";
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php");
} elseif ($aksi == "hapus") {
    $_SESSION['eksekusi'] = "Data berhasil dihapus!";
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php");
}
?>