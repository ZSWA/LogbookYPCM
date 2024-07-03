<?php
include "sesi_admin.php";
if(isset($_GET['NIK'])){
	include "../koneksi.php";
	$NIK=$_GET['NIK'];
	
		$sql1   = "DELETE FROM tb_fasilitator WHERE NIK = '$NIK'";
	
		
	$hapus1 = mysqli_query($koneksi,$sql1);
	if($hapus1){
//			echo 'Data Kelas Berhasil di Hapus ';
//			echo '<a href="index.php">Kembali</a>';
		header("Location: ?m=fasilitator&s=awal");
	}else{
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="index.php">Kembali</a>';
	}
}
?>
