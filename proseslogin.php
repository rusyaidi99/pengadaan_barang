<?php
//panggil file koneksi.php untuk menghubung ke server
include('koneksi.php');
session_start();
 
//tangkap data dari form login
$user = $_POST['username'];
$password = md5($_POST['password']);
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($user);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    header('location:index.php?salah=1');
    break;
} else if (empty($username)) {
    //kalau username saja yang kosong
    header('location:index.php?salah=2');
    break;
} else if (empty($password)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:index.php?salah=3');
    break;
}
 
$q = mysql_query("select * from login where username='$username' and password='$password'");
 
if (mysql_num_rows($q) == 1) {
    //kalau username dan password sudah terdaftar di database
    //buat session dengan nama username dengan isi nama user yang login
    $_SESSION['username'] = $username;
    header('location:menuadmin.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:index.php?salah=4');
}
?>