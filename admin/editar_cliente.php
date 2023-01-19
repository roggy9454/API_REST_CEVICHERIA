<?php
include "header.php";
include "../db.php";

$id = $_GET['id'];
  $query = "SELECT * FROM clientes WHERE id_cliente='$id' ";

  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

	$cedula = $row['cedula_cliente'];
	$nombre = $row['nombre_cliente'];
	$apellido = $row['apellido_cliente'];
	$telefono = $row['telefono_cliente'];

	
}






if (isset($_POST['update'])) {

  $id2 = $_POST['id2'];
  $cedula2 = $_POST['cedula2'];
  $nombre2 = $_POST['nombre2'];
  $apellido2 = $_POST['apellido2'];
  $telefono2 = $_POST['telefono2'];
  
  $url="clientes.php";
  

  $query2 = "UPDATE clientes set cedula_cliente = '$cedula2', nombre_cliente = '$nombre2' , apellido_cliente = '$apellido2' , telefono_cliente = '$telefono2'  WHERE id_cliente=$id2";
    $guardador= mysqli_query($conn, $query2);
    
    if($guardador){
        echo "<script> window.location='$url'; </script>";
    }    
    
    

}



?>



<div class="container mt-3">
    
    <div class="row">
        
        
        <div class="col-md-3"></div>
            
        
        <div class="col-md-6">
            
            
            <!-- Default form contact -->
            <form class=" border border-light pt-3 pl-5 pr-5" action="editar_cliente.php" method="POST">
            
                <p class="h4 mb-4 text-center">MODIFICAR DATOS DEL CLIENTE</p>
            
                <!-- Name -->
                <label>Cédula</label>
                <input type="text" name="cedula2" class="form-control mb-2" value="<?php echo $cedula; ?>">
            
                <!-- Email -->
                <label>Nombres</label>
                <input type="text" name="nombre2" class="form-control mb-2" value="<?php echo $nombre; ?>" >
            
                <label>Apellidos</label>
                <input type="text" name="apellido2" class="form-control mb-2" value="<?php echo $apellido; ?>" > 
                
                <label>Teléfono</label>
                <input type="text" name="telefono2" class="form-control mb-2" value="<?php echo $telefono; ?>" > 
                
                <input type="text" name="id2" class="form-control mb-2" value="<?php echo $id; ?>" style="display:none;" > 
            
                <!-- Send button -->
                <button name="update" class="btn btn-info btn-block" type="submit">MODIFICAR</button>
            
            </form>
            <!-- Default form contact -->            
            
            
            
        </div>        
        
        
    </div>    
    
    
</div>