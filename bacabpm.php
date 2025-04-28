<?php 
	//koneksi ke database
	$koneksi = mysqli_connect("localhost", "root",
	 "", "website-coba");

	// baca tabel sensor
	$sql = mysqli_query($koneksi, "SELECT * FROM 
		tb_sensor ");
	//ambil nilai dari tb_sensor (bpm)
	$data = mysqli_fetch_array($sql);
	//ambil nilai field sensor
	$nilai_sensor = $data['sensor'];

	//uji nilai sensor
	if($nilai_sensor > 80)
		$keterangan = "Sehat";
	else if ($nilai_sensor > 50)
		$keterangan = "Kurang Sehat";
	else 
		$keterangan = "Sakit"; 

 ?>

<h1 style="font-size: 80px"> <?php echo $keterangan ?> </h1>