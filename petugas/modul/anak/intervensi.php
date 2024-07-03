 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data Admin</title>

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
         	$id = $_GET['id_anak'];
           include '../koneksi.php';
           $sql = "SELECT * FROM tb_anak WHERE id_anak = '$id'";
           $query = mysqli_query($koneksi, $sql);
            $r = mysqli_fetch_array($query);

           ?>
          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
             </i> <?php echo $r['nama']; ?>
              </a>
              <ul class="dropdown-menu dropdown-user">
                <li>
                  <form class="" action="logout.php" onclick="return confirm('yakin ingin logout?');" method="post">
                    <button class="btn btn-default" type="submit" name="keluar"><i class="fa fa-sign-out"></i> Keluar</button>
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
                <a href="?m=riwayat&s=awal">
                  <i class="fa fa-gift"></i> Riwayat Intervensi
                </a>
              </li>
              <li>
                <a href="logout.php" onclick="return confirm('yakin ingin logout?');">
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

    <div class="row">

    	<form action="?m=barangMasuk&s=simpan" method="POST" enctype="multipart/form-data">
    	<div class="form-group">
    
    <input type="hidden" name="id_anak" value="<?php echo$r['id_anak'];?>" >
    <input type="hidden" name="Pembimbing" value="<?php echo$r['Pembimbing'];?>" >
   
    
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <p><?php echo $r['nama']; ?></p>
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <p><?php echo $r['tempat_lahir']; ?></p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Lahir</label>
        <p><?php echo $r['tgl_lahir']; ?></p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>
        <p><?php echo $r['jenis_kelamin']; ?></p>
      </div>
    </div>
    <div class="col-md-4">
    
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <p><?php echo $r['alamat']; ?></p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Desa</label>
        <p><?php echo $r['desa']; ?></p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jenis Disabilitas</label>
        <p>
          <?php
          // Kode untuk mengambil data dari tabel "tb_jenis_disabilitas" di database
          $query = "SELECT * FROM tb_jenis_disabilitas";
          $result = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $kode_disabilitas = $row['kode_disabilitas'];
            $jenis_disabilitas = $row['jenis_disabilitas'];
            if ($r['kode_disabilitas'] == $kode_disabilitas) {
              echo $jenis_disabilitas;
            }
          }
          ?>
        </p>
      </div>
    </div>
  </div>
 </div>
    



 <div class="form-group">
  <label for="exampleInputEmail1">Jenis Intervensi</label>
  <select class="form-control" id="exampleInputEmail1" name="kode_intervensi" aria-describedby="emailHelp" required>
    <option value="" selected disabled>Pilih Jenis Intervensi</option>
    <?php
    include '../koneksi.php';
    // Query untuk mengambil data dari tabel
    $query = "SELECT * FROM tb_intervensi";
    $result = mysqli_query($koneksi, $query);

    // Menampilkan data sebagai opsi pilihan
    while ($row = mysqli_fetch_assoc($result)) {
      $kode_intervensi = $row['kode_intervensi'];
      $jenis_intervensi = $row['jenis_intervensi'];
      echo "<option value='$kode_intervensi'>$jenis_intervensi</option>";
    }
    ?>
  </select>
  <small id="emailHelp" class="form-text text-muted">Pilih Jenis Intervensi</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="keterangan"  placeholder="Masukkan Keterangan Intervensi">
    <small id="emailHelp" class="form-text text-muted">Masukkan Keterangan Intervensi</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Upload Foto</label>
    <input type="file" class="form-control-file" id="exampleInputEmail1" name="foto">
    <small id="emailHelp" class="form-text text-muted">Pilih foto kegiatan intervensi yang telah dilakukan</small>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    	
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
