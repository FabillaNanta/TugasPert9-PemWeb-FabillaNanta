<!DOCTYPE html>
<html lang="en">
<head>
    <title>urCatch</title>

    <style>
  html {
    height: 100%;
        }
  body {
    background-color: #393644;
    background-image: url('images/background.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
        }

</style>
</head>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from data";
    $hasil = mysqli_query($koneksi, $query);
?>

    <h1 align="center" style="color: blue">Silahkan login untuk melanjutkan:</h1>
    <br/>
	<!-- notifikasi -->
	<center>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	</center>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>

</body>
</html>
