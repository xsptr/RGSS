<?php
include "dbConfig.php";
$id = $_GET['id'];


$query2 = "DELETE FROM customers WHERE id='".$id."'";
$sql2 = mysqli_query($db, $query2);

if($sql2) {
	header("location: logout.php");
}else{
	echo "Data gagal dihapus. <a href='profil.php'>Kembali</a>";
}
?>