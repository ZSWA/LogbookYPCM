<?php
include '../koneksi.php';

$batas = 4;
$halaman2 = isset($_GET['halaman2']) ? (int)$_GET['halaman2'] : 1;
$halaman_awal2 = ($halaman2 > 1) ? ($halaman2 * $batas) - $batas : 0;

$previous2 = $halaman2 - 1;
$next2 = $halaman2 + 1;

$data2 = mysqli_query($koneksi, "SELECT * FROM tb_anak WHERE Pembimbing = ' '");
$jumlah_data2 = mysqli_num_rows($data2);
$total_halaman2 = ceil($jumlah_data2 / $batas);

$data_mapping2 = mysqli_query($koneksi, "SELECT * FROM tb_anak WHERE Pembimbing = ' ' LIMIT $halaman_awal2, $batas");
$nomor2 = $halaman_awal2 + 1;

while ($row=mysqli_fetch_array($data_mapping2)) {
	



    ?>
   
     <tr>
                                            
                                                   <td><?php echo $row['NIK']; ?></td>
                                                   <td><?php echo $row['nama']; ?></td>
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
                                                   <td><?php echo $row['nama_ayah']; ?></td>
                                                   <td>
                                                       <?php
                                                       if ($row['Pembimbing']==" "){
                                                            echo "-";
                                                           } else {
                                                           echo $row['Pembimbing'];
                                                           }
   
                                                       ?>
                                                   </td>
                                                 
                                                  
   
   
   
                                                   <td><a href="index.php?m=mapping&s=ubah&id_anak=<?php echo $row['id_anak'];?>" ><button class="btn btn-info">Mapping Fasilitator</button></a></td>
   
   
                                                   
                                               </tr>
                                           <?php } ?>