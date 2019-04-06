<?php
// Load file koneksi.php
include "../config.php";
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$code = $_POST['kode'];
$price = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload


// Set path folder tempat menyimpan fotonya
$path = "images/".$foto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $qry = "INSERT INTO products (name, code, image, price) VALUES ('$nama', '$code', '$foto', '$price')";
  $sql = mysqli_query($dbconnect, $qry); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location:produk_list.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";
}
?>