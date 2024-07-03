<?php

include_once "sesi_admin.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/anak/title.php"; break;
	case 'simpan': include "modul/anak/simpan.php"; break;
	case 'hapus': include "modul/anak/hapus.php"; break;
	case 'ubah': include "modul/anak/ubah.php"; break;
	case 'update': include "modul/anak/update.php"; break;
	
}
?>
