<?php

include_once "sesi_admin.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/disabilitas/title.php"; break;
	case 'simpan': include "modul/disabilitas/simpan.php"; break;
	case 'hapus': include "modul/disabilitas/hapus.php"; break;
	
}
?>
