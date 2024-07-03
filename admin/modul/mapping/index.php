<?php 
include 'sesi_admin.php';
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/mapping/title.php"; break;
	case 'ubah': include "modul/mapping/ubah.php"; break;
	case 'ubahmapping': include "modul/mapping/ubahmapping.php"; break;
	case 'update': include "modul/mapping/update.php"; break;
	case 'updatemapping': include "modul/mapping/updatemapping.php"; break;
	
}
 ?>