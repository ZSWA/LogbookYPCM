<head>
   
</head>
<?php 
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_fasilitator");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_rak = mysqli_query($koneksi, "SELECT * FROM tb_fasilitator LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;




while ($row=mysqli_fetch_array($data_rak)) {
  



 ?>

  <tr>
                                         
                                                <td><?php echo $row['NIK']; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>
                                                <td><?php echo $row['desa']; ?></td>
                                                <td><?php echo $row['pekerjaan']; ?></td>
                                                <td><?php echo $row['nama_tempat_kerja']; ?></td>
                                                <td><?php echo $row['tempat_lahir']; ?></td>
                                                <td><?php echo $row['tgl_lahir']; ?></td>
                                              



                                                <td><a href="index.php?m=fasilitator&s=hapus&NIK=<?php echo $row['NIK'];?>" onclick="return confirm('Yakin Akan dihapus?')"><button class="btn btn-danger">Hapus</button></a>|<a href="index.php?m=fasilitator&s=ubah&NIK=<?php echo $row['NIK'];?>"><button class="btn btn-primary">Ubah</button></a></td>


                                                
                                            </tr>
                                        <?php } ?>

