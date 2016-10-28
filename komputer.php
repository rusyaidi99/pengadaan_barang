<!DOCTYPE html>
<?php 
	include 'ceklogin.php';
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Menu Admin</title>
	
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
		<li><a class="active" href="menuadmin.php">Home</a></li>
		<li><a href="tambah.php">Tambah</a></li>
		<li><a href="data_user.php">Data User</a></li>
		<li><a href="logout.php">Logout</a></li>
		</nav>
</div>

	<section>
	<article>
		<div>
		<table id="tabel" border="1" cellpadding="5px">
			<tr>
				<th>NO</th>
				<th>Kelompok Barang</th>
				<th>Spesifikasi</th>
				<th>Jumlah</th>
				<th>Nama Pengadaan</th>
				<th>Jenis Aset</th>
				<th>Pejabat Penerima<br>Hasil Pekerjaan<br>(PPHP)</th>
				<th>Tanggal</th>
				<th></th>
			</tr>

			<tbody>
				<?php
				include 'koneksi.php';
				$query = mysql_query("SELECT * FROM barang WHERE kelompok='PC Komputer'");
				$no=1;
				while($data = mysql_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['kelompok']; ?></td>
							<td><?php echo $data['spesifikasi']; ?></td>
							<td><?php echo $data['jumlah']; ?></td>
							<td><?php echo $data['nama_pengadaan']; ?></td>
							<td><?php echo $data['jenis_aset']; ?></td>
							<td><?php echo $data['penerima']; ?></td>
							<?php
							$tanggal=$data['tanggal']; //format tanggal awal (Tanggal,Bulan,Tahun)
							$ubahFormat=date('d-m-Y',strtotime($tanggal)); //merubah format tanggal
							?>
							<td><?php echo $ubahFormat; ?></td>



							<td class="center">
								<a href="edit.php?id_artikel=<?php echo $data['id_artikel']; ?>"><button>Edit</button></a>
								<a href="proses_hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>"><button>Hapus</button></a>
							</td>
						</tr>
					<?php
						$no++;}
					?>
			</tbody>
		</table>	
	</div>
       
	</article>

</section>
</body>

</html>