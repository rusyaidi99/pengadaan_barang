<!DOCTYPE html>
<?php 
	include 'ceklogin.php';
 ?>

<html>
<head>
	<link rel="stylesheet" href="jquery-ui.css" type="text/css"/>
<script src="jquery-1.10.2.js" type="text/javascript"></script>
<script src="jquery-ui.js" type="text/javascript"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			 dateFormat:'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
	});
	</script>

	<title>Halaman Tambah</title>
	<style type="text/css">
		body {
			margin: auto 50px;
		}
	</style>
	<script type="text/javascript" src="js/file.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	
</head>
<body>
	
	<header>
		<img src="../img/logo.png" width="90px" align="left">
		<h1>Sistem Inventory<br>Bidang Pengembangan Layanan Teknologi Informatika</h1>
	</header>

<div class="aside">
	<nav>
		<li><a href="menuadmin.php">Home</a></li>
		<li><a class="active" href="tambah.php">Tambah</a></li>
		<li><a href="data_user.php">Data User</a></li>
		<li><a href="logout.php">Logout</a></li>
		</nav>
</div>
	
	<article>
		<div>
			
				<form action="proses_tambah_barang.php" method="POST">
					
					<label>Kelompok Barang</label> <br>					
					<select name="kelompok" id="isi_kelompok" required="true">
						<option></option>	
						<option>Router</option>
						<option>Switch/Hub</option>
						<option>PC Komputer</option>
						<option>Laptop</option>
						<option>Tower</option>
						<option>Kabel Jaringan</option>
						<option>Stabilizer</option>
						<option>Access Point</option>


					</select> <br><span id="kelompok"></span><br>



					<label>Spesifikasi</label> <br>
					
					<input name="spesifikasi" type="text" placeholder="Isi Spesifikasi" maxlength="200" required="true" id="isi_spesifikasi"> <br>
					<span id="spesifikasi"></span> <br> 
					

					<label>Jumlah</label> <br>
					
					<input name="jumlah" type="number" placeholder="Isi Jumlah" maxlength="5" required="true" id="jumlah"> <br>
					<span id="jumlah"></span> <br><br>


					<label>Nama Pengadaan</label> <br>					
					<select name="nama" id="isi_nama" required="true">
						<option></option>	
						<option>Pengadaan Jaringan Komputer</option>
						<option>Pemeliharaan Jaringan FO</option>
						<option>Pemeliharaan Jaringan wireless</option>
					</select> <br><span id="nama"></span><br>


					<label>Jenis Aset</label> <br>					
					<select name="jenis" id="isi_jenis" required="true">
						<option></option>	
						<option>Belanja Modal</option>
						<option>Pakai Habis</option>

					</select> <br><span id="kelompok"></span><br>

					<label>Pejabat Penerima Hasil Pekerjaan (PPHP)</label> <br>
					
					<input name="penerima" type="text" placeholder="Isi nama penerima" maxlength="200" id="isi_penerima" required="true"> <br>
					<span id="penerima"></span> <br> 


					<label>Tanggal Masuk</label><br>

				    <input name="tanggal" type="text" id="datepicker" required="true">
					<br><br>

					<button type="submit" class="submit">Submit</button>
					<button type="reset">Reset</button> <br><br> <br><br>

				</form>
		</div>
	</article>
</body>
</html>