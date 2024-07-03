<head>
	 
</head>
<?php 
include '../koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_riwintervensi WHERE id_fasilitator = '$NIK'");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_brg_in = mysqli_query($koneksi, "SELECT * FROM tb_riwintervensi WHERE id_fasilitator = '$NIK' LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;




while ($row=mysqli_fetch_array($data_brg_in)) {
	



 ?>

  <tr>
                                         
                                                <td><?php echo $row['tgl_intervensi']; ?></td>
                                                <td><?php
                                                    include "../koneksi.php";
                                                    $id_anak = $row['id_anak'];
                                                    $query = "SELECT nama FROM tb_anak WHERE id_anak = '$id_anak'";
                                                    $result = mysqli_query($koneksi, $query);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $data = mysqli_fetch_assoc($result);
                                                        echo $data['nama'];
                                                        } else {
                                                        echo "-";
                                                        }

                                                        mysqli_close($koneksi);
                                                    ?></td>
                                                <td><?php
                                                    include "../koneksi.php";
                                                    $kode_intervensi = $row['kode_intervensi'];
                                                    $query = "SELECT jenis_intervensi FROM tb_intervensi WHERE kode_intervensi = '$kode_intervensi'";
                                                    $result = mysqli_query($koneksi, $query);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $data = mysqli_fetch_assoc($result);
                                                        echo $data['jenis_intervensi'];
                                                        } else {
                                                        echo "-";
                                                        }

                                                        mysqli_close($koneksi);
                                                    ?></td>
                                                 <td><?php echo $row['keterangan']; ?></td>
                                                 <td><img src="../images/admin/<?php echo $row['foto'];?> " height=150/></td>
                                              
                                              



                                                <td><a href="index.php?m=riwayat&s=hapus&id_intervensi=<?php echo $row['id_intervensi'];?>" onclick="return confirm('Yakin Akan dihapus?')"><button class="btn btn-danger">Hapus</button></a></td>


                                                
                                            </tr>
                                        <?php } ?>

