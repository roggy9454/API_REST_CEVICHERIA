<?php

include("../db.php");

if(isset($_GET['id'])) {
    $id_cliente = $_GET['id']; 
  $url="clientes.php";

  $query = "DELETE FROM clientes WHERE id_cliente = $id_cliente";
  $result2 = mysqli_query($conn, $query);
  
echo "<script> window.location='$url'; </script>"; 
}