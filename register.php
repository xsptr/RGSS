<!DOCTYPE html>
<html lang="en">
<head>
	<neta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Registrasi</title>

	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body class="body">

	<div class="col-md-4 col-md-offset-4 form-login">
		<div class="outter-form-login">
			<div class="logo-login">
				<em class="glyphicon glyphicon-user"></em>
			</div>
			<form action="send_daftar.php" class="inner-login" method="post">
				<h3 class="text-center title-login">Registrasi</h3>
					<div class="form-group">
						<input type="text" class="form-control" name="nama" placeholder="Nama">
					</div>

					<div class="form-group">
						<input type="textarea" class="form-control" name="alamat" placeholder="Alamat" required="required">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="telepon" placeholder="Telepon" required="required">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">
					</div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>

					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">
					</div>

					<div class="form-group">
						<input type="radio" name="gender" value="Pria" required="required">Pria
						<input type="radio" name="gender" value="Wanita" required="required">Wanita
					</div>

					<div class="form-group">
						 <input type="text" name="tanggal" class="form-control" placeholder="Tanggal Lahir : YYYY/MM/DD" required="required">
					</div>

					<input type="submit" class="btn btn-block btn-custom-green" value="REGISTER">

					<div class="text-center forget">
						<p>Back To <a href="./index.php">Login</a></p>
					</div>
			</form>
			</div>
		</div>


		<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
</body>
</html>