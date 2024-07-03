<?php
session_start();
include_once "sesi_petugas.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="Petugas|| YPCM";
switch($modul){
    case 'awal': default: $aktif="Beranda"; $judul="Beranda $jawal"; include "awal.php"; break;
    case 'anak': $aktif="Data Anak"; $judul="Modul Data Anak"; include "modul/anak/index.php"; break;
    case 'riwayat': $aktif="Riwayat"; $judul="Modul Riwayat Intervensi"; include "modul/riwayat/index.php"; break;
    
    
   
}

?>
