<?php
// Load koneksi
include "dbConfig.php";

// Ambil data id dari halaman edit.php
$id = $_POST['id'];

// Ambil data dari form
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$harga = $_POST['harga'];

// Cek apakah user ingin mengubah foto atau tidak
if(isset($_POST['edit'])){
	// Jika user memilih untuk update foto, lakukan

	// Ambil data foto yang dipilih
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	// Set path folder tempat foto tersimpan
	$path = "images/".$foto;

	// Proses update
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil di upload

		// Query untuk menampilkan data dari tabel products berdasarkan id
		$query = "SELECT * FROM products WHERE id ='".$id."'";
		$sql = mysqli_query($db, $query); // Eksekusi query

		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi

		// Cek apakah file foto sudah ada di folder images
		if(is_file("images/".$data['foto'])) //Jika foto ada
		unlink("images/".$data['foto']); // Hapus file foto sebelumnya

		// Proses ubah data ke Database
		$query = "UPDATE products SET name = '".$nama."', code='".$kode."', price ='".$harga."', image = '".$foto."' WHERE id ='".$id."'";
		$sql = mysqli_query($db, $query); // Eksekusi query

		if($sql){ // Cek apakah proses berhasil atau tidak
			// Jika sukses, lakukan :
			header("location: produk_list.php"); // Redirect ke halaman produk
		}else{
			// Jika Gagal, lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
			echo "<br><a href='produk_list.php'> Kembali << </a>";
		}

	}else{
		// Jika gambar gagal diupload, lakukan :
		echo "Maaf, Gambar gagal untuk di upload";
		echo "<br><a href='produk_list.php'>Kembali << </a>";
	}
}else{ // Jika user tidak memilih untuk edit foto, lakukan :
	// Proses ubah data ke database
	$query = "UPDATE products SET name='".$nama."', code='".$kode."', price ='".$harga."' WHERE id ='".$id."'";
	$sql = mysqli_query($db, $query); // Eksekusi query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika sukses, lakukan:
		header("location: produk_list.php"); // Redirect ke halaman produk list
	}else{
		// Jika gagal, lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
		echo "<br><a href='produk_list.php'> Kembali << </a>";
	}
}

?>