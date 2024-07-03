<?php
include "sesi_admin.php";
if(isset($_POST['simpan'])){
	include "../koneksi.php";
	$intervensi = $_POST['intervensi'];
	
	
		$sql = "INSERT INTO tb_intervensi SET jenis_intervensi='$intervensi'";
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
