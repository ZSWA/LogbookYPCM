<?php
session_start();
include_once "sesi_admin.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="ADMIN || YPCM";
switch($modul){
    case 'awal': default: $aktif="Beranda"; $judul="Beranda $jawal"; include "awal.php"; break;
    case 'anak': $aktif="Anak"; $judul="Modul $jawal"; include "modul/anak/index.php"; break;
    case 'fasilitator': $aktif="Fasilitator"; $judul="Modul Fasilitator "; include "modul/fasilitator/index.php"; break;
    case 'mapping': $aktif="Mapping"; $judul="Modul Mapping "; include "modul/mapping/index.php"; break;
    case 'intervensi': $aktif="Intervensi"; $judul="Modul Jenis Intervensi "; include "modul/intervensi/index.php"; break;
    case 'layanan': $aktif="Layanan"; $judul="Modul Intervensi"; include "modul/layanan/index.php"; break;
    case 'disabilitas': $aktif="Disabilitas"; $judul="Modul Jenis Disabilitas"; include "modul/disabilitas/index.php"; break;
    
   
}

?>
