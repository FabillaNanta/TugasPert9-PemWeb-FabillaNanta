<?php

    include("koneksi.php");

    $id_data = $_POST['id_data'];
    $tempat_tangkap = $_POST['tempat_tangkap'];
    $total_harga = $_POST['total_harga'];

    $query = "update data set tempat_tangkap = '$tempat_tangkap', total_harga = '$total_harga' where id_data = $id_data";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_data=$id_data");
    }

?>