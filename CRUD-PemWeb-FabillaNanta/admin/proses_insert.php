<?php

    include("koneksi.php");

    $tempat_tangkap = $_POST['tempat_tangkap'];
    $total_harga = $_POST['total_harga'];
    $id_user = $_POST['id_user'];

    $query = "insert into data values ('', '$tempat_tangkap', '$total_harga', $id_user)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_data=$id_data");
    }

?>