<?php
include "../classes/database.php";
session_start();

$db = new database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $_SESSION['eksekusi'] = "Berhasil";
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php");
} elseif ($aksi == "update") {
    $_SESSION['eksekusi'] = "Berhasil";
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php");
}
?>