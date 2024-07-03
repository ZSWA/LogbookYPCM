<?php 
include '../koneksi.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$sql = "SELECT * FROM tb_fasilitator WHERE username = '$user' AND password =  '$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);
$b = mysqli_fetch_array($login);

if ($ketemu>0) {
	session_start();
	$_SESSION['idinv2'] = $b['NIK'];
	$_SESSION['userinv2'] = $b['username'];
	$_SESSION['passinv2'] = $b['password'];
	$_SESSION['namainv2'] = $b['nama'];
	header("location: index.php?m=awal");
}else{
	echo '<script language="javascript">';
        echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
    header("location: login_petugas.php");
}
 

 ?>