<!DOCTYPE html>
<?php 
	include 'ceklogin.php';
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Menu Lihat Komentar</title>
	
	<script type="text/javascript" src="js/file.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script type="text/javascript">
	
	
	</script>


</head>
<body>

	

	<header>
		<img src="../img/logo.png" width="90px" align="left">
		<h1>Sistem Inventory<br>Bidang Pengembangan Layanan Teknologi Informatika</h1>
	</header>

<div class="aside">
	<nav>
		<li><a href="menuadmin.php">Home</a></li>
		<li><a href="tambah.php">Tambah</a></li>
		<li><a class="active" href="data_user.php">Data User</a></li>
		<li><a href="logout.php">Logout</a></li>
		</nav>
</div>

	<section>
	<article>
		<table id="tabel" border="1" cellpadding="5px">
			<thead>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th></th>
			</thead>

			<tbody>
				<?php
				include 'koneksi.php';
				$query = mysql_query("SELECT * FROM user");
				$no=1;
				while($data = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['password']; ?></td>
							<td class="center">
								<a href="proses_hapus_komentar.php?id_komentar=<?php echo $data['id_komentar']; ?>"><button>Hapus</button></a>
							</td>
						</tr>
					<?php
						$no++; }
					?>
			</tbody>
		</table>	
	
       
	</article>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
		Copyright @ WISR - 2015
	</footer>

</body>
</html>