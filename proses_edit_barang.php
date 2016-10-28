<?php
include 'koneksi.php';

$id_barang		= $_POST['id_barang'];
$kelompok		= $_POST['kelompok'];
$spesifikasi	= $_POST['spesifikasi'];
$jumlah			= $_POST['jumlah'];
$nama			= $_POST['nama'];
$jenis			= $_POST['jenis'];
$penerima		= $_POST['penerima'];
$tanggal		= $_POST['tanggal'];


$query = mysql_query("UPDATE barang SET kelompok = '$kelompok', spesifikasi = '$spesifikasi', jumlah = '$jumlah', nama_pengadaan = '$nama', jenis_aset = '$jenis', penerima = '$penerima', tanggal = '$tanggal' WHERE id_barang = $id_barang");


if($query) {
	echo '<script>alert("Data Berhasil Diedit")</script>';
} else{
	echo '<script>alert("Data Gagal Diedit")</script>';
}
	echo '<meta http-equiv="Refresh" content="0; url=menuadmin.php">';
?>