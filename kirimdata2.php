<?php 
	$koneksi = mysqli_connect("localhost", "root",
	 "", "website-coba");

	$nilai_sensor = $_GET['sensor'];

	//update nilai sensor
	mysqli_query ($koneksi, "UPDATE tb_sensor SET sensor='$nilai_sensor'")
 ?>