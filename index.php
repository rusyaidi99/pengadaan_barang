<html>
<head>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Login</title>
</head>
 
<body>
	
 
		<?php
		//kode php ini kita gunakan untuk menampilkan pesan eror
		if (!empty($_GET['salah'])) {
			if ($_GET['salah'] == 1) {
				echo '<h3 align="center">Username dan Password belum diisi!</h3>';
			} else if ($_GET['salah'] == 2) {
				echo '<h3 align="center">Username belum diisi!</h3>';
			} else if ($_GET['salah'] == 3) {
				echo '<h3 align="center">Password belum diisi!</h3>';
			} else if ($_GET['salah'] == 4) {
				echo '<h3 align="center">Username dan Password tidak terdaftar!</h3>';
			}
		}
		?>

		<br><br><br>
 <center>
	<form name="login" action="proseslogin.php" method="post">
		<div id="form-login">
            <center>Silahkan Login</center>
		<table border="0" cellpadding="5" cellspacing="0">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr align="center">
				<td colspan="3"><input type="submit" name="login" value="Login" /></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>