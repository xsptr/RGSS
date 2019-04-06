<?php
session_start();
require 'config.php';

if (isset($_POST['username']) && isset($_POST['password']) ) {

	$username = $_POST['username'];
	$password = md5( $_POST['password']);

	$username = $dbconnect->escape_string($username);
	$password = $dbconnect->escape_string($password);

	$sql_check = "SELECT nama,
                       id,status 
                FROM customers
                WHERE
                       username= '$username'
                AND
                       password= '$password'
                LIMIT 1";

	$check_log = $dbconnect->query($sql_check);

	if ($check_log->num_rows == 1) {
		$row = $check_log->fetch_assoc();

		$_SESSION['nama'] = $row['nama'];
		$_SESSION['sess_id'] = $row['id'];
		$_SESSION['status'] = $row['status'];

		if( $row['status'] == 'admin'){
			$_SESSION['admin']= 'TRUE';
		}
		header('location: ./admin');
		exit();
	} else {
		header('location: index.php?error='.base64_encode('Username atau Password Invalid!!!'));
		exit();
	}

}

?>
