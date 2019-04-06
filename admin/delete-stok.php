<?php
include "dbConfig.php";
$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id='".$id."'";
$sql = mysqli_query($db, $query);




$query2 = "DELETE FROM products WHERE id='".$id."'";
$sql2 = mysqli_query($db, $query2);

if($sql2) {
	header("location: produk_list.php");
}else{
	echo "Data gagal dihapus. <a href='produk_list.php'>Kembali</a>";
}
?>