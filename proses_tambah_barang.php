<?php
include 'koneksi.php';

$kelompok		= $_POST['kelompok'];
$spesifikasi	= $_POST['spesifikasi'];
$jumlah			= $_POST['jumlah'];
$nama			= $_POST['nama'];
$jenis			= $_POST['jenis'];
$penerima		= $_POST['penerima'];
$tanggal		= $_POST['tanggal'];

$query	= "INSERT INTO barang (kelompok, spesifikasi, jumlah, nama_pengadaan, jenis_aset, penerima, tanggal) VALUES ('$kelompok', '$spesifikasi', '$jumlah', '$nama', '$jenis', '$penerima', '$tanggal')";
$save	= mysql_query($query);

if($save) {
	echo '<script>alert("Data Berhasil Ditambahkan")</script>';
} else{
	echo '<script>alert("Data Gagal Ditambahkan")</script>';
}
	echo '<meta http-equiv="Refresh" content="0; url=../admin/menuadmin.php">';
?>