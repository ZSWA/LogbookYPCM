<?php

include_once "sesi_admin.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/fasilitator/title.php"; break;
	case 'simpan': include "modul/fasilitator/simpan.php"; break;
	case 'hapus': include "modul/fasilitator/hapus.php"; break;
	case 'ubah': include "modul/fasilitator/ubah.php"; break;
	case 'update': include "modul/fasilitator/update.php"; break;
	
}
?>
