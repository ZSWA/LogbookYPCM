<?php 
include '../koneksi.php';

if (isset($_GET['kode_disabilitas'])) {
	$id = $_GET['kode_disabilitas'];


	$sql = "DELETE FROM tb_jenis_disabilitas WHERE kode_disabilitas='$id'";
	mysqli_query($koneksi, $sql);

	if ($sql) {
	 	header("location: ?m=disabilitas&s=awal");
	 }else{
	 	echo "gagal dihapus";
	 }
}


 ?>