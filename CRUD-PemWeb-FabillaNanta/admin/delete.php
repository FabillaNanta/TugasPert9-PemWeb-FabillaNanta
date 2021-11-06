<?php    
   include("koneksi.php");

   $id_data = $_GET['id_data'];

   $query = "delete from data where id_data = $id_data";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?id_data=$id_data");
   }

?>