<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YPCM Boyolali</title>
    <!-- Bootstrap CSS -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/tampilan.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">YPCM Boyolali</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="petugas/login_petugas.php">Masuk</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Deskripsi Perusahaan -->
    <section id="tentang" class="section-margin" style="margin-top: 70px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Tentang YPCM Boyolali</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>Yayasan Penderita Cacat Mental Boyolali adalah sebuah lembaga sosial yang peduli dan berdedikasi dalam memberikan perhatian serta bantuan kepada individu yang menderita cacat mental. Kami berkomitmen untuk memberikan perawatan yang holistik dan meningkatkan kualitas hidup penderita melalui berbagai program rehabilitasi dan terapi.</p>
                    <p>Dengan pengalaman dan keahlian yang kami miliki, kami menyediakan lingkungan yang aman dan mendukung untuk penderita cacat mental. Melalui pendekatan yang empati dan terapeutik, kami membantu mereka dalam mengembangkan potensi, meningkatkan kemandirian, serta integrasi mereka ke dalam masyarakat. Kami berupaya keras untuk menciptakan perubahan positif dalam kehidupan mereka dan menjadi dukungan yang kuat bagi penderita cacat mental dan keluarga mereka.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section id="login" class="section-margin">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>Masuk Sebagai Fasilitator</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <a href="petugas/login_petugas.php">
                        <button class="btn btn-success">Fasilitator</button>
                    </a>
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
    <!-- Bootstrap JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
