 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $judul; ?></title>

    <!-- boootstrap -->
    <link href="../vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

     <link href="../vendor/css/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="../css/tampilanadmin.css" rel="stylesheet">

  </head>
  <body>
    <!-- Menu -->
    <div id="wrapper">

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand">Yayasan Penderita Cacat Mental Boyolali</a>
          </div>
          <?php 
          $id = $_SESSION['idinv'];
           include '../koneksi.php';
           $sql = "SELECT * FROM tb_admin WHERE id_admin = '$id'";
           $query = mysqli_query($koneksi, $sql);
            $r = mysqli_fetch_array($query);

           ?>
            <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               <img src="../images/admin/<?php echo $r['foto']; ?>" height="50"></i> <?php echo $r['nama']; ?>
              </a>
              <ul class="dropdown-menu dropdown-user">
                <li>
                  <form class="" action="logout.php" onclick="return confirm('yakin ingin logout?');" method="post">
                    <button class="btn btn-default" type="submit" name="keluar"><i class="fa fa-sign-out"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>

        <!-- menu samping -->
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
            <li>
                <a href="?m=awal.php">
                  <i class="fa fa-dashboard"></i> Beranda
                </a>
              </li>
              <li>
                <a href="?m=anak&s=awal">
                  <i class="fa fa-user"></i> Data Anak
                </a>
              </li>
               <li>
                <a href="?m=fasilitator&s=awal">
                  <i class="fa fa-users"></i> Data Fasilitator
                </a>
              </li>
                            <li>
                <a href="?m=mapping&s=awal">
                  <i class="fa fa-building"></i> Mapping Fasilitator
                </a>
              </li>
              <li>
                <a href="?m=layanan&s=awal">
                  <i class="fa fa-gift"></i> Data Intervensi
                </a>
              </li>
              <li>
                <a href="?m=disabilitas&s=awal">
                  <i class="fa fa-archive"></i> Jenis Disabilitas
                </a>
              </li>
                            <li>
                <a href="?m=intervensi&s=awal">
                  <i class="fa fa-cubes"></i> Jenis Intervensi
                </a>
              </li>
                            <li>
                <a href="logout.php" onclick="return confirm('yakin ingin logout?')">
                  <i class="fa fa-warning"></i> Logout
                </a>
              </li>
              
            </ul>
          </div>
        </div>

      </nav>

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Data Anak</h1>
          </div>
        </div>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Tambah data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah data anak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?m=anak&s=simpan" method="POST" enctype="multipart/form-data">
        <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama Anak">
    <small id="emailHelp" class="form-text text-muted">Masukkan Nama Anak</small>
  </div>
  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
    <small id="emailHelp" class="form-text text-muted">Masukkan Tempat Lahir</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_lahir" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir">
    <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal Lahir</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">jenis_kelamin</label>
    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" aria-describedby="emailHelp" required>
      <option value="" selected disabled>Pilih Jenis Kelamin</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Pilih Jenis Kelamin</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" placeholder="Masukkan alamat">
    <small id="emailHelp" class="form-text text-muted">Masukkan Alamat</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Desa</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="desa" placeholder="Masukkan Desa Tempat Tinggal">
    <small id="emailHelp" class="form-text text-muted">Masukkan Desa Tempat Tinggal</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Ayah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_ayah" placeholder="Masukkan Nama Ayah">
    <small id="emailHelp" class="form-text text-muted">Masukkan Nama Ayah</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pekerjaan Ayah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
    <small id="emailHelp" class="form-text text-muted">Masukkan Pekerjaan Ayah</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Ibu</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_ibu" placeholder="Masukkan Nama Ibu">
    <small id="emailHelp" class="form-text text-muted">Masukkan Nama Ibu</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pekerjaan Ibu</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
    <small id="emailHelp" class="form-text text-muted">Masukkan Pekerjaan Ibu</small>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Jenis Disabilitas</label>
  <select class="form-control" id="exampleInputEmail1" name="kode_disabilitas" aria-describedby="emailHelp" required>
    <option value="" selected disabled>Pilih Jenis Disabilitas</option>
    <?php
    include '../koneksi.php';
    // Query untuk mengambil data dari tabel "tb_jenis_disabilitas"
    $query = "SELECT * FROM tb_jenis_disabilitas";
    $result = mysqli_query($koneksi, $query);

    // Menampilkan data sebagai opsi pilihan
    while ($row = mysqli_fetch_assoc($result)) {
      $kode_disabilitas = $row['kode_disabilitas'];
      $jenis_disabilitas = $row['jenis_disabilitas'];
      echo "<option value='$kode_disabilitas'>$jenis_disabilitas</option>";
    }
    ?>
  </select>
  <small id="emailHelp" class="form-text text-muted">Pilih Jenis Disabilitas</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NIK" placeholder="Masukkan NIK">
    <small id="emailHelp" class="form-text text-muted">Masukkan NIK</small>
  </div>
  <!-- <div class="form-group">
    <label>Foto</label>
    <input type="file"  aria-describedby="emailHelp" name="foto" placeholder="Masukkan Foto">
    <small id="emailHelp" class="form-text text-muted">Masukkan Foto</small>
  </div> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>

         <div class="row">

                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                
                                 <th>Id Anak</th>
                                 <th>Nama</th>
                                 <th>Tempat Lahir</th>
                                 <th>Tanggal Lahir</th>
                                 <th>Jenis Kelamin</th>
                                 <th>Alamat</th>
                                 <th>Desa</th>
                                 <th>Jenis Disabilitas</th>
                                 <th>NIK</th>
                                 
                                
                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           <?php 
                                          
                                            include 'paging.php';

                                            ?>

                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                             <center><ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?m=anak&s=awal&halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?m=anak&s=awal&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?m=anak&s=awal&halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
              </center> 
      </div>
    </div>


    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
            <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Zainuri Septian Wahyu Anggoro All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="../vendor/css/js/bootstrap.min.js"></script>

  </body>
</html>
