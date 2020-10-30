<?php
$title = "Mini market masjid";
include_once "header.php";
include_once "koneksi.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Sepeda Motor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Halaman Admin </h2>

	</div>

	<br />
	<a href="index.php">< Lihat Semua Data</a>
		<h3>Input Data Baru</h3>
	<form action="proses_tambah.php" method="post">		

		<table class="table">
			<tr>
				<td>Nama Masjid</td>
				<td><input type="text" class="form-control" name="masjid" required></td>					
			</tr>	
			<tr>
				<td>Nama Usaha</td>
				<td><input type="text" class="form-control" name="nama" required></td>					
			</tr>	
			<tr>
				<td>Jenis Usaha</td>
				<td><input type="text" class="form-control" name="jenis" required></td>					
			</tr>	
			<tr>
				<td>Produk</td>
				<td><input type="text" class="form-control" name="produk" required></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="alamat" required></td>					
			</tr>
			<tr>
				<td>Info1</td>
				<td><input type="text" class="form-control" name="info" required></td>					
			</tr>	
			<tr>
				<td>Info 2</td>
				<td><input type="text" class="form-control" name="infoi" required></td>					
			</tr>
			<tr>
				<td>latitude</td>
				<td><input type="text" class="form-control" name="latitude" required></td>					
			</tr>
			<tr>
				<td>longtitude</td>
				<td><input type="text" class="form-control" name="longtitude" required></td>					
			</tr>
			<tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            
			
				<td></td>
				<td><button type="submit">Simpan</button></td>					
						
		</table>

		
	</form>
	
</body>
</html>