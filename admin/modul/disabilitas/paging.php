<head>
	 
</head>
<?php 
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_jenis_disabilitas");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_rak = mysqli_query($koneksi, "SELECT * FROM tb_jenis_disabilitas LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;




while ($row=mysqli_fetch_array($data_rak)) {
	



 ?>

  <tr>
                                         
                                                <td><?php echo $row['kode_disabilitas']; ?></td>
                                                <td><?php echo $row['jenis_disabilitas']; ?></td>
                                              



                                                <td><a href="index.php?m=rak&s=hapus&kode_disabilitas=<?php echo $row['kode_disabilitas'];?>" onclick="return confirm('Yakin Akan dihapus?')"><button class="btn btn-danger">Hapus</button></a></td>


                                                
                                            </tr>
                                        <?php } ?>

