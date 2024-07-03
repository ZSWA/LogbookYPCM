<?php 
include 'sesi_petugas.php';
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/riwayat/title.php"; break;
	case 'simpan': include "modul/riwayat/simpan.php"; break;
	case 'hapus': include "modul/riwayat/hapus.php"; break;
	case 'ubah': include "modul/riwayat/ubah.php"; break;
	case 'update': include "modul/riwayat/update.php"; break;
	
}
 ?>