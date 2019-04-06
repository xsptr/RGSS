<?php
session_start();
include 'dbConfig.php';
$id = $_SESSION['sess_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RG Soccer Store</title>
	 <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Bootstrap Style -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">RG Soccer Store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="produk.php">Produk</a>
                    </li>
					<li>
                        <a href="Pemesanan.php">Pemesanan</a>
                    </li>
                        <?php if (isset($_SESSION['nama'])) :?>
                            <?php echo
                    "<li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Profil <span class='caret'></span></a>

                        <ul class='linkdropdown dropdown-menu'>
                            <li><a href='profil.php'>Edit Profil</a></li>
                            <li><a href='logout.php'>Logout</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href='viewCart.php'>Keranjang</a>
                    </li>

                    <li>
                        <a href='order.php'>Barang yang dipesan</a>
                    </li>"
                         ?>
                    <?php else: ?>
                    <li>
                        <a href="#login" data-toggle="modal"><i class="fa fa-user"></i> Login</a>
                    </li>
                    <?php endif ?>
                    <li>
                        <a href="#">Tentang Kami</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
     <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang Kami</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div>
                    <p>Nama Toko    : RG Soccer Store </br> Alamat  : Jln. Siliwangi No 87 </br> Kontak : 081394079060, 7CF5F80E </br> Buka Setiap hari Senin-Sabtu </br> Pukul 09.00-17.00WIB </br> Toko kami menyediakan JERSEY, KAOS KAKI, dan SEPATU SPORT </br> Informasi pemesanan dapat dilihat di halaman PEMESANAN</p>
             </div>
        </div>
    </section>
   <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Lokasi</h3>
                        <p>Jl. Siliwangi No. 78
                            <br>Kota Tasikmalaya, Kecamatan Tawang, Jawa Barat, Indonesia</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Website</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; rgsoccerstore.co.id
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Modal Login-->
<div class="modal fade bs-example-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-custom">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel" align="center">&bull; Login &bull;</h4>
                </div>
                <div class="modal-body">
  
                   <form action="check-login.php" class="form-horizontal" role="form" method="POST">

                        <div class="form-group">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" required autofocus="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary round gradient">
                                    Login
                                </button>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-sm-offset-2">
                             Already have an account ?
                                <a class="btn btn-link" href="register.php">
                                     Register
                                </a>
                            </div>
                        </div>
                    </form>
  
                </div>
            </div>
        </div>
    </div>
  <!-- Modal Login -->


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>
</html>