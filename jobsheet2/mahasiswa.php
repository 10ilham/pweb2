<?php

//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;


    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama Saya adalah Ilham";
    }

    //method untuk menampilkan alamat 
    function tampil_alamat ()
    {
        //isi method
    }
}

// membuat class dosen
class dosen {

    // property
    var $nidn;
    var $nama;
    var $prodi;

    // method
    function tampil_nidn(){
        return "220102037";
    }

    function tampil_nama(){
        return "Nama saya Ilham";
    }

    function tampil_prodi(){
        return "D3-Teknik Informatika";
    }

}

//membuat objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//membuat objek nidn
$nidn_dosen = new dosen();

//membuat objek nama dosen
$nama_dosen = new dosen();

//membuat objek prodi
$prodi_dosen = new dosen();

//menampilkan objek ke Layar
echo "Mahasiswa : <br>";
echo $nama_mahasiswa->tampil_nama(). "<br>";

// dosen
echo "<br>Dosen : <br>";
echo $nama_dosen->tampil_nama() . "<br>";
echo $nidn_dosen->tampil_nidn() . "<br>";
echo $prodi_dosen->tampil_prodi() . "<br>";
?>