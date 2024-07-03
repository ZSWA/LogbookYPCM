<?php
include "sesi_admin.php";
if(isset($_POST['simpan'])){
	include "../koneksi.php";
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$desa = $_POST['desa'];
	$nama_ayah = $_POST['nama_ayah'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$kode_disabilitas = $_POST['kode_disabilitas'];
	$NIK = $_POST['NIK'];
	
	
	$sql    = "SELECT * FROM tb_anak WHERE NIK = '".$NIK."'";
    $tambah = mysqli_query($koneksi, $sql);
    $row    = mysqli_fetch_row($tambah);

    if ($row) {
    	echo "Data anak sudah ada";
    }else{
		$sql = "INSERT INTO tb_anak SET nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', desa='$desa', nama_ayah='$nama_ayah', pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu', pekerjaan_ibu='$pekerjaan_ibu', kode_disabilitas='$kode_disabilitas', NIK='$NIK', Pembimbing=' '";
		mysqli_query($koneksi,$sql);
		header("location: ?m=anak&s=awal");
    }
	
}else{
	echo "gagal";
}
?>