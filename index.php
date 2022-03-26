<?php 
session_start();
// include "koneksi.php";
// session_start();
$koneksi=mysqli_connect("localhost","root","","distro");

// if (!isset($_SESSION["pelanggan"])) {
// 	echo "<script>alert('silahkan login')</script>";
// 	echo "<script>location('loginpelanggan.php')</script>";
// }

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>toko Distro</title>
</head>
<body>
	<!-- <link rel="stylesheet" type="text/css" href="user.css"> -->
	<!-- navbar -->
	<?php 
		include "menu.php";
	 ?>
	<!-- tutup navbar -->
	<div class="banner">
		<img src="banner3.jpg">
	</div><br>
	<hr><span></span><h3>FEATURED</h3><hr>

		<div class="content">
			<?php 

			$ambil=mysqli_query($koneksi, "SELECT * FROM produk ");
			while ($perproduk=mysqli_fetch_assoc($ambil)) {

			 ?>
			<div class="container">
				<div class="belakang">
					<div class="produk">
						<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="hp">
					</div>
					<div class="caption">
						<h4><?php echo $perproduk['nama_produk']; ?></h4>
						<h5>RP <?php echo number_format($perproduk['harga_produk']);  ?></h5><br>
						<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>">BUY</a>
						<a href="detailproduk.php?id=<?php echo $perproduk['id_produk'];?>">DETAIL</a>
					</div>
				</div>
			</div>
		<?php } ?>
		</div><br><br><br><br><br><br><br>

		<?php 

		include "footer.php";

		 ?>

		<style type="text/css">
		.produk img{
			width: 250px;
			margin-top: 80px;
		}

		.caption{
			text-align: center;
		}

		.caption h4:hover{
			color: #1FBBA6;
		}

		.caption h5{
			color: #1FBBA6;
			margin-top: 5px;
		}

		.caption a{
			text-decoration: none;
			padding: 12px;
			color: rgba(6, 9, 10, 0.96);
		}

		/*banner*/

		.banner img{
			width: 100%;
			height: 540px;
		}

		h3{
			text-align: center;
			padding:10px;
			font-size: 25px;
			font-family: verdana; 
		}

		</style>

</body>
</html>