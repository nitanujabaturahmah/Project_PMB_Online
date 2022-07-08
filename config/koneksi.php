<?php

	$host     = 'localhost';
	$user 	  = 'root';
	$password = '';
	$database = 'pmb_itc';

	$koneksi = mysqli_connect($host, $user, $password, $database);
	if (!$koneksi) {
		die('Koneksi Database Gagal : ');
	}
?>