<!DOCTYPE html>
<?php 
	include 'ceklogin.php';
 ?>
<html>
<head>
	<title>Halaman Edit</title>
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
	
	<article>
		<div>
			<div>
				<?php 
				include 'koneksi.php';
				$id_barang = $_GET['id_barang'];
				$query 		= mysql_query("SELECT * FROM barang WHERE id_barang = $id_barang");
				$data 		= mysql_fetch_array($query);
				?>
				<form action="proses_edit_barang.php" method="POST">

					<label>Kelompok Barang</label> <br>

					<select name="kelompok" id="isi_kelompok" required="true">
						<option></option>	
						<option value="Router" <?php if($data['kelompok'] == 'Router') echo 'selected'; ?>>Router</option>
						<option value="Switch/Hub" <?php if($data['kelompok'] == 'Switch/Hub') echo 'selected'; ?>>Switch/Hub</option>
						<option value="PC Komputer" <?php if($data['kelompok'] == 'PC Komputer') echo 'selected'; ?>>PC Komputer</option>
						<option value="Laptop" <?php if($data['kelompok'] == 'Laptop') echo 'selected'; ?>>Laptop</option>
						<option value="Tower" <?php if($data['kelompok'] == 'Tower') echo 'selected'; ?>>Tower</option>
						<option value="Kabel Jaringan" <?php if($data['kelompok'] == 'Kabel Jaringan') echo 'selected'; ?>>Kabel Jaringan</option>
						<option value="Stabilizer" <?php if($data['kelompok'] == 'Stabilizer') echo 'selected'; ?>>Stabilizer</option>
						<option value="Access Point" <?php if($data['kelompok'] == 'Access Point') echo 'selected'; ?>>Access Point</option>
					</select> <br><span id="kelompok"></span><br>

					<label>Spesifikasi</label> <br>
					
					<input name="spesifikasi" value= "<?php echo $data['spesifikasi']; ?>" type="text" placeholder="Isi spesifikasi" maxlength="200" required="true" id="isi_spesifikasi"> <br>
					<span id="spesifikasi"></span> <br>

					<label>Jumlah</label> <br>
					
					<input name="jumlah" value= "<?php echo $data['jumlah']; ?>" type="number" placeholder="Isi Jumlah" maxlength="5" required="true" id="jumlah"> <br>
					<span id="jumlah"></span> <br><br>

					<label>Nama Pengadaan</label> <br>					
					<select name="nama" id="isi_nama" required="true">
						<option></option>	
						<option value="Pengadaan Jaringan Komputer" <?php if($data['nama_pengadaan'] == 'Pengadaan Jaringan Komputer') echo 'selected'; ?>>Pengadaan Jaringan Komputer</option>
						<option value="Pemeliharaan Jaringan FO" <?php if($data['nama_pengadaan'] == 'Pemeliharaan Jaringan FO') echo 'selected'; ?>>Pemeliharaan Jaringan FO</option>
						<option value="Pemeliharaan Jaringan wireless" <?php if($data['nama_pengadaan'] == 'Pemeliharaan Jaringan wireless') echo 'selected'; ?>>Pemeliharaan Jaringan wireless</option>
					</select> <br><span id="nama"></span><br>


					<label>Jenis Aset</label> <br>					
					<select name="jenis" id="isi_jenis" required="true">
						<option></option>
						<option value="Belanja Modal" <?php if($data['jenis_aset'] == 'Belanja Modal') echo 'selected'; ?>>Belanja Modal</option>
						<option value="Pakai Habis" <?php if($data['jenis_aset'] == 'Pakai Habis') echo 'selected'; ?>>Pakai Habis</option>	

					</select> <br><span id="jenis"></span><br>

					<label>Pejabat Penerima Hasil Pekerjaan (PPHP)</label> <br>
					
					<input name="penerima" value= "<?php echo $data['penerima']; ?>" type="text" placeholder="Isi nama penerima" maxlength="200" id="isi_penerima" required="true"> <br>
					<span id="penerima"></span> <br> 


					<label>Tanggal Masuk</label><br>

				    <input name="tanggal" value= "<?php echo $data['tanggal']; ?>" type="text" id="datepicker" required="true">
					<br><br>

					

					<button type="submit" class="submit">Submit</button>
					<button type="reset">Reset</button> <br><br> <br><br>

				</form>
			</div>
		</div>
	</article>

	
	<div id="pinggir">
        <b>Data Artikel yang di daftarkan</b><br><br>
        <div id="kelompok"></div> 
        <div id="spesifikasi"></div> 
        <div id="jumlah"></div>
        <div id="nama"></div>
        <div id="jenis"></div> 
        <div id="penerima"></div>
        <div id="tanggal"></div>
    </div>
    <br>

</body>
</html>