<?php
session_start();
if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
    header("location: ../index.php");
}
include 'dbConfig.php';
?>

<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.5
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>CoreUI - Open Source Bootstrap Admin Template</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">


    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

        <style type="text/css">
        .breadcrumb {
            background-color: #304047;
        }
        .card-success {
            background-color: #475A63;
            border-color: #475A63;
        }
    </style>

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Footer options
1. '.footer-fixed'						- Fixed footer

-->

<body class="app header-fixed sidebar-fixed">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/admin.png" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <a class="dropdown-item" href="../logout.php"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>

        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./"><i class="icon-speedometer"></i> Dashboard</a>
                    </li>

                    <li class="nav-title">
                        Store
                    </li>


                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Order</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="pemesanan.php"><i class="icon-puzzle"></i> Pemesanan</a>
                            </li>
                            <li class="nav-item">
                                <a href="list.php" class="nav-link"><i class="icon-note"></i> Order List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle
                        " href="#"><i class="icon-star"></i> Produk</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="produk_list.php"><i class="icon-puzzle"></i> Produk List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tambah_data.php"><i class="icon-puzzle"></i> Tambah Barang</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kustomer.php"><i class="icon-people"></i> Kustomer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="icon-layers"></i>Shop Page</a>
                    </li>
                    
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active"><a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Produk List</li>
            </ol>


            <div class="container-fluid">
                <div class="animated fadeIn">

                    <table class="table table-responsive table-hover table-outline mb-0">
                        <thead class="thead-default">
                          <tr>
                            <th class="text-center">
                                No
                            </th>
                            <th class="text-center">
                              Kode Barang
                            </th>
                            <th class="text-center">
                              Nama Barang
                            </th>
                            <th class="text-center">
                              Harga
                            </th>
                            <th>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php
          //get rows query
          $query = $db->query("SELECT * FROM products");
          $no = 1;
          if($query->num_rows > 0){
              foreach($query as $row) {
         ?>
        <tr>
            <td class="text-center"><?php echo $no; ?></td>
            <td class="text-center"><?php echo $row['code'];?></td>
            <td class="text-center"><?php echo $row['name'];?></td>
            <td class="text-center"> Rp. <?php echo $row['price'];?></td>

            <td class="text-center">
                <a href="#" class="edit-record" data-id="<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>

                <a href="delete-stok.php?id=<?php echo $row['id'];?>" title='click for delete' onclick="return confirm('sure to delete ?')"><i class="fa fa-times"></i></a>
            </td>
  
        </tr>
        <?php 
        $no++;
            } 
        }else{
        echo
    "<p>Anda Belum Order</p>";
     }?>
                        </tbody>
                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </div>


            </div>
            <!-- /.conainer-fluid -->
        </main>


     <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-info" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Produk</h4>
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
        </div>
                <!-- /.modal -->

    <footer class="app-footer">
        <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs. Customized
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="js/Chart.min.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '.edit-record', function(e) {
                e.preventDefault();
                $("#infoModal").modal('show');
                $.post('edit-stok.php',
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