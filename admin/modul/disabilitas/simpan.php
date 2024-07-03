<?php
include "sesi_admin.php";
if(isset($_POST['simpan'])){
	include "../koneksi.php";
	$jenis_disabilitas = $_POST['jenis_disabilitas'];
	
	
		$sql = "INSERT INTO tb_jenis_disabilitas SET jenis_disabilitas='$jenis_disabilitas'";
			mysqli_query($koneksi,$sql);
	if($sql){
		 echo '<script>window.history.back()</script>';
		//echo "berhasil";
	}else{
		var_dump($sql);
		echo "gagal";
	}
}else{
	echo "gagal";
}
?>
