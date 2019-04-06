<?php
if (isset($_POST['username']) && $_POST['username']) {

	//memasukkan file koneksi ke database
	require_once 'config.php';

	//menyimpan variable yang dikirim Form
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$tanggal = $_POST['tanggal'];

	//encryption dengan md5
	$password = md5($password);


	//SQL Insert
	$sql = "INSERT INTO customers (username, nama, alamat, telepon, email, password, gender, tanggal, created, modified, status)
			VALUES ('$username', '$nama', '$alamat', '$telepon', '$email', '$password', '$gender', '$tanggal', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP, 'member')";
	$insert = $dbconnect->query($sql);

	//jika gagal
	if ($insert) {
		echo "<script>alert('Berhasil Daftar, Silahkan Login untuk melanjutkan'); window.location.href = './index.php';</script>";
		exit();
	} else {
		echo "<script>alert('Username atau Email sudah terpakai'); window.location.href = './register.php';</script>";
		exit();
	}
}

?>