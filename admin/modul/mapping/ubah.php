 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Input Data Admin</title>

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
            <a class="navbar-brand">YAYASAN PENDERITA CACAT MENTAL BOYOLALI</a>
          </div>
          <?php 
         	$id = $_GET['id_anak'];
           include '../koneksi.php';
           $sql = "SELECT * FROM tb_anak WHERE id_anak = '$id'";
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
            <h1 class="page-header">Mapping Fasilitator</h1>
          </div>
        </div>

    <div class="row">

    	<form action="?m=mapping&s=update" method="POST" enctype="multipart/form-data">
    	<div class="form-group">
    
    <input type="hidden" name="id_anak" value="<?php echo$r['id_anak'];?>" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="NIK" value="<?php echo $r['NIK']; ?>" disabled placeholder="Masukkan NIK">
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" disabled class="form-control" id="exampleInputEmail1" value="<?php echo $r['nama']; ?>" name="nama" placeholder="Masukkan Nama Anak">
</div>
<div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" value="<?php echo $r['tempat_lahir']; ?>" name="tempat_lahir" disabled placeholder="Masukkan Tempat Lahir">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_lahir" value="<?php echo $r['tgl_lahir']; ?>" disabled placeholder="Masukkan Tanggal Lahir">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled>
        <option value="" selected disabled>Pilih Jenis Kelamin</option>
        <option value="Laki-laki" <?php if ($r['jenis_kelamin'] == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
        <option value="Perempuan" <?php if ($r['jenis_kelamin'] == "Perempuan") echo "selected"; ?>>Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" value="<?php echo $r['alamat']; ?>" disabled placeholder="Masukkan alamat">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Desa</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="desa" value="<?php echo $r['desa']; ?>" disabled placeholder="Masukkan Desa Tempat Tinggal">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Jenis Disabilitas</label>
    <select class="form-control" id="jenis_disabilitas" name="kode_disabilitas" disabled>
        <option value="" selected disabled>Pilih Jenis Disabilitas</option>
        <?php
        // Kode untuk mengambil data dari tabel "tb_jenis_disabilitas" di database
        $query = "SELECT * FROM tb_jenis_disabilitas";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $kode_disabilitas = $row['kode_disabilitas'];
            $jenis_disabilitas = $row['jenis_disabilitas'];
            $selected = ($r['kode_disabilitas'] == $kode_disabilitas) ? 'selected' : '';
            echo "<option value='$kode_disabilitas' $selected>$jenis_disabilitas</option>";
        }
        ?>
    </select>
</div>
<!-- Input fields for other anak details -->

<div class="form-group">
            <label for="exampleInputEmail1">Mapping Fasilitator</label>
            <select class="form-control" id="Pembimbing" name="Pembimbing">
                <option value="" selected disabled>Pilih Fasilitator</option>
                <?php
                // Kode untuk mengambil data dari tabel "tb_fasilitator" di database
                $query = "SELECT * FROM tb_fasilitator";
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $NIKFas = $row['NIK'];
                    $NamaFas = $row['nama'];
                    $selected = ($r['Pembimbing'] == $NamaFas) ? 'selected' : '';
                    echo "<option value='$NIKFas' $selected>$NamaFas</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" id="Tahun" name="Tahun" placeholder="Masukkan Tahun Bimbingan">
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
