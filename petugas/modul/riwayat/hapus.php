<?php 
include '../koneksi.php';
include 'sesi_petugas';
if (isset($_GET['id_intervensi'])) {
	$id = $_GET['id_intervensi'];

	$sql = "DELETE FROM tb_riwintervensi WHERE id_intervensi='$id'";
	mysqli_query($koneksi, $sql);

	if ($sql) {
		header("location: ?m=riwayat&s=awal");
	}else{
		echo "gagal";
	}
}


 ?>