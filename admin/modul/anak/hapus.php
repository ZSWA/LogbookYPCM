<?php
include "sesi_admin.php";
if(isset($_GET['id_anak'])){
	include "../koneksi.php";
	$id=$_GET['id_anak'];
	
		$sql1   = "DELETE FROM tb_anak WHERE id_anak= '$id'";
	
		
	$hapus1 = mysqli_query($koneksi,$sql1);
	if($hapus1){
//			echo 'Data Kelas Berhasil di Hapus ';
//			echo '<a href="index.php">Kembali</a>';
		header("Location: ?m=anak&s=awal");
	}else{
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="index.php">Kembali</a>';
	}
}
?>