<?php
include "sesi_admin.php";
if(isset($_POST['simpan'])){
	include "../koneksi.php";
	$nik = $_POST['NIK'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$alamat = $_POST['alamat'];
	$desa = $_POST['desa'];
	$pekerjaan = $_POST['pekerjaan'];
	$nama_tempat_kerja = $_POST['nama_tempat_kerja'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$sql    = "SELECT * FROM tb_fasilitator WHERE username = '".$username."'";
    $tambah = mysqli_query($koneksi, $sql);
    $row    = mysqli_fetch_row($tambah);

    if ($row) {
    	echo "username sudah ada";
    }else{
		$sql = "INSERT INTO tb_fasilitator SET NIK = '$nik', nama='$nama', username='$username', password='$password', alamat='$alamat', desa='$desa', pekerjaan='$pekerjaan', nama_tempat_kerja='$nama_tempat_kerja', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir'";
		mysqli_query($koneksi,$sql);
		header("location: ?m=fasilitator&s=awal");
    }
	
}else{
	echo "gagal";
}
?>
