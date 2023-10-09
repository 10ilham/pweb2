<?php

use mahasiswa as GlobalMahasiswa;

class manusia 
{
    protected $nama_saya;

    function panggil_nama($saya) 
    {
        $this->nama_saya = $saya;
    }
}

// class turunan atau sub class dari class manusia
class mahasiswa extends manusia 
{
    // Protected dan private kedalam kelas turunan
    private $nama_mahasiswa; // Menjadikan properti private

    function panggil_mahasiswa($mahasiswa) 
    {
        $this->nama_mahasiswa = $mahasiswa;
    }

    function tampilkan_nama_saya() 
    {
        return $this->nama_saya; //protected karna dari turunan dipanggilnya
    }

    function tampilkan_nama_mahasiswa() // private karna dari class mahasiswa sendiri
    {
        return $this->nama_mahasiswa;
    }
}

    //instansiasi class mahasiswa
    $informatika = new mahasiswa();

    $informatika->panggil_nama("Ilham"); //ngambil dari class mahasiswa karna informatika = class mhs
    $informatika->panggil_mahasiswa("Munawar");

    // Tampilkan isi property
    echo "Nama Depan saya : " . $informatika->tampilkan_nama_saya() . "<br>";
    echo "Nama Belakang : " . $informatika->tampilkan_nama_mahasiswa();
    // Ciri pemanggilan turunan protected/private "$informatika->tampilkan_nama_saya()" tetapi tergantung
    // Ciri pemanggilan public "$informatika->nama_saya"