<html>
<head>
	<title>e-Catch</title>

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
	<h2 align="center">e-Catch</h2>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4 align="center" style="color: blue">Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
<?php
    include ("koneksi.php");

    $query = "select * from data";
    $hasil = mysqli_query($koneksi, $query);
?>

    <h1 align="center"> Silahkan menambahkan data tangkapan Anda </h1>
    <form action="proses_insert.php" method="POST" align="center">
        id data : <input type="text" name="id_data" value=""><br/><br>
        Tempat Tangkap : <textarea name="tempat_tangkap"></textarea><br/><br>
        Total Harga : <input type="text" name="total_harga" value=""><br/><br>
        ID User : <input type="text" name="id_user" value=""><br/><br>
        <input type="submit" value="simpan">
    </form>
    
    <h1 align="center"> e-Catch Update </h1>

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Tempat Tangkap</th>
            <th>Total Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_data']."</td>";
            echo "<td>".$row['tempat_tangkap']."</td>";
            echo "<td>".$row['total_harga']."</td>";
            echo "<td><a href='edit.php?id_data=".$row['id_data']."'>edit</a></td>";
            echo "<td><a href='delete.php?id_data=".$row['id_data']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>  
    </table>
</body>
</html>

</body>

<a href="logout.php">LOGOUT</a>
</html>