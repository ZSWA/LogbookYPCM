<?php 
	
	include '../koneksi.php';

	if (isset($_POST['simpan'])) {
	$NIK = $_POST['NIK'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$alamat = $_POST['alamat'];
	$desa = $_POST['desa'];
	$pekerjaan = $_POST['pekerjaan'];
	$nama_tempat_kerja = $_POST['nama_tempat_kerja'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];

	if (empty($password)) {
		$sql = "UPDATE tb_fasilitator SET nama='$nama', username='$username', alamat='$alamat', desa='$desa', pekerjaan='$pekerjaan', nama_tempat_kerja='$nama_tempat_kerja', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir' WHERE NIK='$NIK'";
		mysqli_query($koneksi, $sql);

	}else{
			$sql = "UPDATE tb_fasilitator SET nama='$nama', username='$username', password='$password', alamat='$alamat', desa='$desa', pekerjaan='$pekerjaan', nama_tempat_kerja='$nama_tempat_kerja', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir' WHERE NIK='$NIK'";
		mysqli_query($koneksi, $sql);

	}

	if ($sql) {
		header("location: ?m=fasilitator&s=awal");
	}else{
		echo "gagal";
	}

	}





 ?>