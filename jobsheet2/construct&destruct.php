<?php

//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika" . "<br>";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }

    function tampil_nama()
    {
        return "Nama Saya adalah Ilham <br>";
    }

    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah <br>";
    }

}

//membuat objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke Layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();

?>