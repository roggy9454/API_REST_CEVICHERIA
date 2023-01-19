<?php

include("../db.php");

if(isset($_GET['id'])) {
    $id_proveedor = $_GET['id']; 
  $url="proveedores.php";

  $query = "DELETE FROM provedores WHERE id_proveedor = $id_proveedor";
  $result2 = mysqli_query($conn, $query);
  
echo "<script> window.location='$url'; </script>"; 
}