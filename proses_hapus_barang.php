<?php
include 'koneksi.php';

$id_barang	= $_GET['id_barang'];

$query	= mysql_query("DELETE FROM barang WHERE id_barang = $id_barang");

if($query) {
	echo '<script>alert("Data Berhasil Dihapus")</script>';
} else{
	echo '<script>alert("Data Gagal Dihapus")</script>';
}
	echo '<meta http-equiv="Refresh" content="0; url=../admin/menuadmin.php">';

?>