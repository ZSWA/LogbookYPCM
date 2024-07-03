<head>
	 
</head>
<?php 
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_anak WHERE Pembimbing='$NIK' ");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_brg_in = mysqli_query($koneksi, "SELECT * FROM tb_anak WHERE Pembimbing='$NIK' LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;




while ($row=mysqli_fetch_array($data_brg_in)) {
	



 ?>

  <tr>
                                         
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['tempat_lahir']; ?></td>
                                                <td><?php echo $row['tgl_lahir']; ?></td>
                                                <td><?php echo $row['jenis_kelamin']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>
                                                <td><?php echo $row['desa']; ?></td>
                                                <td>
                                                <?php
                                                    include "../koneksi.php";
                                                    $kode_disabilitas = $row['kode_disabilitas'];
                                                    $query = "SELECT jenis_disabilitas FROM tb_jenis_disabilitas WHERE kode_disabilitas = '$kode_disabilitas'";
                                                    $result = mysqli_query($koneksi, $query);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $data = mysqli_fetch_assoc($result);
                                                        echo $data['jenis_disabilitas'];
                                                        } else {
                                                        echo "-";
                                                        }

                                                        mysqli_close($koneksi);
                                                    ?>
                                                </td>
                                                <td><?php echo $row['NIK']; ?></td>
                                              



                                                <td><a href="index.php?m=anak&s=intervensi&id_anak=<?php echo $row['id_anak'];?>" onclick="return confirm('Lakukan Intervensi?')"><button class="btn btn-success">Intervensi</button></a></td>


                                                
                                            </tr>
                                        <?php } ?>

