<?php 
	
	include '../koneksi.php';

	if (isset($_POST['simpan'])) {
    $id_anak = $_POST['id_anak'];
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

	}

	$sql = "UPDATE tb_anak SET nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', desa='$desa', nama_ayah='$nama_ayah', pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu', pekerjaan_ibu='$pekerjaan_ibu', kode_disabilitas='$kode_disabilitas', NIK='$NIK', pembimbing=' ' WHERE id_anak='$id_anak'";
	$update = mysqli_query($koneksi, $sql);

	if ($update) {
		header("location: ?m=anak&s=awal");
	}else{
		echo "gagal";
	}




 ?>