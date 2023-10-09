<?php
class mahasiswa
{
    // Property public dan private
    public $nama;
    private $nim = "220102037";

    //public method
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama Saya Ilham </br>";
    }

    //membuat protected method 
    function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}

//instansiasi objek mahasiswa kedalam variabel $mahasiswa 
$mahasiswa = new mahasiswa ();
$nim = new mahasiswa();

//memanggil method tampilkan nama 
echo $mahasiswa->tampilkan_nama(); 
echo $nim->tampilkan_nim();
?>