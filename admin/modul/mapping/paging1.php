<?php
include '../koneksi.php';

$batas = 4;
$halaman1 = isset($_GET['halaman1']) ? (int)$_GET['halaman1'] : 1;
$halaman_awal1 = ($halaman1 > 1) ? ($halaman1 * $batas) - $batas : 0;

$previous1 = $halaman1 - 1;
$next1 = $halaman1 + 1;

$data1 = mysqli_query($koneksi, "SELECT * FROM tb_mapping");
$jumlah_data1 = mysqli_num_rows($data1);
$total_halaman1 = ceil($jumlah_data1 / $batas);

$data_mapping1 = mysqli_query($koneksi, "SELECT * FROM tb_mapping LIMIT $halaman_awal1, $batas");
$nomor1 = $halaman_awal1 + 1;

while ($row=mysqli_fetch_array($data_mapping1)) {
	



    ?>
   
     <tr>
                                            
                                                   <td><?php echo $row['id_mapping']; ?></td>
                                                   <td>
                                                   <?php
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
                                                       ?>
                                                   </td>
                                                   <td>
                                                   <?php
                                                       include "../koneksi.php";
                                                       $id_fas = $row['id_fasilitator'];
                                                       $query = "SELECT nama FROM tb_fasilitator WHERE NIK = '$id_fas'";
                                                       $result = mysqli_query($koneksi, $query);
   
                                                       if (mysqli_num_rows($result) > 0) {
                                                           $data = mysqli_fetch_assoc($result);
                                                           echo $data['nama'];
                                                           } else {
                                                           echo "-";
                                                           }
   
                                                           mysqli_close($koneksi);
                                                       ?>
                                                    </td>
                                                   <td><?php echo $row['Tahun']; ?></td>
                                                   
                                                 
                                                  
   
   
   
                                                   <td><a href="index.php?m=mapping&s=ubahmapping&id_mapping=<?php echo $row['id_mapping'];?>" ><button class="btn btn-info">Ubah Fasilitator</button></a></td>
   
   
                                                   
                                               </tr>
                                           <?php } ?>