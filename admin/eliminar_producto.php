<?php

include("../db.php");

if(isset($_GET['id'])) {
    $id_producto = $_GET['id']; 
  $url="productos.php";

  $query = "DELETE FROM productos WHERE id_producto = $id_producto";
  $result2 = mysqli_query($conn, $query);
  
echo "<script> window.location='$url'; </script>"; 
}