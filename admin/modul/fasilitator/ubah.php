 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Fasilitator</title>

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
         	$id = $_GET['NIK'];
           include '../koneksi.php';
           $sql = "SELECT * FROM tb_fasilitator WHERE NIK = '$id'";
           $query = mysqli_query($koneksi, $sql);
            $r = mysqli_fetch_array($query);

           ?>
          <ul class="nav navbar-top-links navbar-right">
            
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
                  <i class="fa fa-cubes"></i> jenis Intervensi
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
            <h1 class="page-header">Edit Data Petugas</h1>
          </div>
        </div>

    <div class="row">

    	<form action="?m=petugas&s=update" method="POST" enctype="multipart/form-data">
    		<input type="hidden" value="<?php echo$r['NIK'];?>" name="NIK">

        <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" value="<?php echo $r['nama']; ?>" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="<?php echo $r['username']; ?>" aria-describedby="emailHelp" placeholder="Masukkan Username">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="password" aria-describedby="emailHelp" placeholder="Masukkan Password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">alamat</label>
    <input type="text" class="form-control" value="<?php echo $r['alamat']; ?>" id="exampleInputEmail1" name="alamat" aria-describedby="emailHelp" placeholder="Masukkan Alamat">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Desa</label>
    <input type="text" class="form-control" value="<?php echo $r['desa']; ?>" id="exampleInputEmail1" name="desa" aria-describedby="emailHelp" placeholder="Masukkan Desa">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Pekerjaan</label>
    <input type="text" class="form-control" value="<?php echo $r['pekerjaan']; ?>" id="exampleInputEmail1" name="pekerjaan" aria-describedby="emailHelp" placeholder="Masukkan Pekerjan">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Tempat Kerja</label>
    <input type="text" class="form-control" value="<?php echo $r['nama_tempat_kerja']; ?>" id="exampleInputEmail1" name="nama_tempat_kerja" aria-describedby="emailHelp" placeholder="Masukkan Nama Tempat Kerja">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Lahir</label>
    <input type="text" class="form-control" value="<?php echo $r['tempat_lahir']; ?>" id="exampleInputEmail1" name="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_lahir" value="<?php echo $r['tgl_lahir']; ?>" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir">
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
            <p class="text-muted" style="font-size: 16px;">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Zainuri Septian Wahyu Anggoro. All rights reserved</p>
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
