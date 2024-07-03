


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Petugas</title>

    <!-- boootstrap -->
    <link href="../vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="../css/tampilan.css" rel="stylesheet">

  </head>
  <body>
    <!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a class="navbar-brand">Login Fasilitator YPCM Boyolali</a>
        </div>
      </div>
    </nav>

    <!-- Section -->
    <section class="bagian3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title text-center">Masuk</h1>
              </div>
              <div class="panel-body">
              	<form class="form" action="pro_login_petugas.php" method="post">
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                    <input class="form-control" type="text" name="user" required="" placeholder="Masukkan username Anda">
                  </div>
                 
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input class="form-control" type="password" name="pass" required="" value="" placeholder="Password">
                  </div>
                 
                  <div class="form-group">
                    <a href="../index.php">
                      <button type="button" name="button" class="btn btn-danger">Batal</button>
                    </a>

                    <input class="btn btn-success" type="submit" name="daftar" value="Masuk">
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <ul class="list-inline">
                <li><a href="#" target="_blank"><i class="fa fa-facebook fa-fw fa-2x"></i></a></li>
                <li><a href="https://www.instagram.com/ypcm_boyolali/?hl=id" target="_blank"><i class="fa fa-instagram fa-fw fa-2x"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin fa-fw fa-2x"></i></a></li>
            </ul>
            <hr>
            <p class="text-muted">&copy; <script>document.write(new Date().getFullYear());</script> Zainuri Septian Wahyu Anggoro. All rights reserved.</p>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="vendor/css/js/bootstrap.min.js"></script>

  </body>
</html>
