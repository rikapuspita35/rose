<?php 
			
 include"koneksi.php";
			$nama_masjid= $_POST['masjid'];
			$nama_usaha= $_POST['nama'];
			$jenis_usaha= $_POST['jenis'];
			$produk= $_POST['produk'];
			$alamat= $_POST['alamat'];
			$info1= $_POST['info'];
			$info2= $_POST['infoi'];
			$latitude= $_POST['latitude'];
			$longtitude= $_POST['longtitude'];
			
			$query = mysqli_query($conn,"INSERT INTO `jasaweb` (`id_perusahaan`, `nama_masjid`, `nama_usaha`, `jenis_usaha`, `produk`, `alamat`, `info1`, `info2`, `latitude`, `longitude`) VALUES (NULL, '$nama_masjid', '$nama_usaha', '$jenis_usaha', '$produk', '$alamat', '$info1', '$info2', '$latitude', '$longtitude')");


			header("location:data.php");
		?>