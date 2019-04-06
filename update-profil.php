<?php
// Load Koneksi
include "dbConfig.php";

// Ambil data id dari halaman edit
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$radio = $_POST['radios'];

if(isset($_POST['edit'])){

	$query = "UPDATE customers SET nama = '".$nama."', alamat='".$alamat."', telepon = '".$alamat."', email= '".$email."', tanggal= '".$tanggal."', gender= '".$radio."' WHERE id ='".$id."'";
	$sql = mysqli_query($db, $query); // Eksekusi query

	if($sql){ // Cek jika proses update berhasil atau tidak
		// Jika sukses, lakukan:
		header("location: profil.php"); // redirect ke halaman profil
	}else{
		// Jika gagal, lakukan:
		echo "Maaf, Terjadi kesalahan saat mencoba untuk updates";
		echo "<br><a href='profil.php'> Kembali << </a>";
	}
}
?>