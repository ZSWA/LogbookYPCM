<?php 
include 'sesi_admin.php';
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/intervensi/title.php"; break;
	case 'simpan': include "modul/intervensi/simpan.php"; break;
	case 'hapus': include "modul/intervensi/hapus.php"; break;
	
}
 ?>