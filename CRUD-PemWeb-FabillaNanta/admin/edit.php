<!DOCTYPE html>
<html lang="en">
<head>
    <title>e-Catch</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_data = $_GET['id_data'];

        $query = "select * from data where id_data = $id_data";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    <h1>Edit Data Tangkapan</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_data" value="<?php echo $row['id_data']; ?>">
        Tempat Tangkap : <input type="text" name="tempat_tangkap" value="<?php echo $row['tempat_tangkap']; ?>"><br/>
        Total Harga : <textarea name="total_harga"><?php echo $row['total_harga']; ?></textarea><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>