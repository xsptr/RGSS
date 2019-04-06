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
                            <li><a href='#'>Edit Profil</a></li>
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
                        <a href="tentang_kami.php">Tentang Kami</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>My Profile</legend>
        <?php
 //get rows query
          $query = $db->query("SELECT * FROM customers WHERE id = $id");
          $no = 1;
          if($query->num_rows > 0){
                foreach($query as $row){
         ?>
<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['nama'];?></label>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['username'];?></label>    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Alamat</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['alamat'];?></label>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Telepon</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['telepon'];?></label>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['email'];?></label>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Jenis Kelamin</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['gender'];?></label>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tanggal Lahir</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['tanggal'];?></label>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tgl. Bergabung</label>  
  <div class="col-md-4">
  <label class="control-label"><?php echo $row['created'];?></label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <a href="#" class="btn btn-success edit-record" data-id="<?php echo $row['id'];?>"> Edit Profil</a>
  <a href="delete-profil.php?id=<?php echo $row['id'];?>" class="btn btn-danger" title='click for delete' onclick="return confirm('Anda Yakin ?')">Hapus Profil</a>
</div>
        <?php
        $no++; 
        ;}
    }else{
        echo
    "<p>Anda Belum Order</p>";
     }?>

</fieldset>
</form>

</div>
    </header>
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
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Profil</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">    
                            </div>
                          
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
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

    <!-- Script untuk update profile -->
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '.edit-record', function(e) {
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('edit-profil.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );    
            });
        });
    </script>
</body>
</html>