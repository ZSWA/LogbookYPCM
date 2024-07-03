<?php 
include "sesi_petugas.php";
if(isset($_POST['simpan'])) {
	include('../koneksi.php');
	include "../fungsi/upload.php";
	$fasilitator = $_POST['Pembimbing'];
	$anak = $_POST['id_anak'];
	$tanggal = date('Y-m-d');
	$kode_intervensi 		= $_POST['kode_intervensi'];
	$keterangan		= $_POST['keterangan'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$fotobaru = date('dmYHis').$namafile;
	$tipefile=$_FILES['foto']['type'];

	$folder="../images/admin/";
	$ukuran=100;
	UploadFoto($fotobaru,$folder,$ukuran);
	

	$sql = "INSERT INTO tb_riwintervensi SET tgl_intervensi='$tanggal', id_anak='$anak', kode_intervensi='$kode_intervensi', keterangan='$keterangan', foto='$fotobaru', id_fasilitator='$fasilitator'";
	mysqli_query($koneksi, $sql);
	if($sql){
		 //echo '<script>window.history.back()</script>';
		header("location: ?m=riwayat&s=awal");
	}else{
		var_dump($sql);
		echo "gagal";
	}
}else{
	echo "gagal";
}



 ?>