<?php
include "sesi_admin.php";
if(isset($_GET['kode_intervensi'])){
	include "../koneksi.php";
	$id=$_GET['kode_intervensi'];
	
		$sql1   = "DELETE FROM tb_intervensi WHERE kode_intervensi= '$id'";
	
		
	$hapus1 = mysqli_query($koneksi,$sql1);
	if($hapus1){
//			echo 'Data Kelas Berhasil di Hapus ';
//			echo '<a href="index.php">Kembali</a>';
		header("Location: ?m=intervensi&s=awal");
	}else{
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="index.php">Kembali</a>';
	}
}
?>
