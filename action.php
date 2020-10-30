<?php 
			

			$nama_masjid= $_POST['masjid'];
			$nama_usaha= $_POST['nama'];
			$jenis_usaha= $_POST['jenis'];
			$produk= $_POST['produk'];
			$alamat= $_POST['alamat'];
			$info1= $_POST['info1'];
			$info2= $_POST['info2'];
			$latitude= $_POST['latitude'];
			$longtitude= $_POST['longtitude'];
			
			$query = mysqli_query("INSERT INTO jasaweb (masjid, nama, jenis, produk,alamat, info, infoi, latitude, longtitude) VALUES ('$nama_masjid', '$nama_usaha', '$jenis_usaha', '$produk', '$alamat', '$info1', '$info2', '$longtitude', '$longtitude')") or die(mysqli_error());
		?>