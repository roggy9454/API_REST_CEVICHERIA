<?php
include "header.php";
include "../db.php";



  $query = "SELECT * FROM informacion WHERE id_informacion='1'";

  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

	$mision = $row['mision'];
	$vision = $row['vision'];
	$valores = $row['valores'];
	$nombre = $row['nombre_empresa'];

	
}


?>




<div class="container mt-5">

<div class="row">

<div class="col-md-2">
</div>    
    
<div class="col-md-8">

<!-- Default form contact -->
<form class="text-center border border-light pb-2 pt-2 pl-5 pr-5" action="actualizar_informacion.php" method="POST">

    <p class="h4 mb-2">ACTUALIZAR INFORMACIÓN DE LA EMPRESA</p>


    <!-- Subject -->
    <label>Nombre de la empresa</label>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="nombre" rows="1" ><?php echo $nombre; ?></textarea>
    </div>


    <!-- Subject -->
    <label>Misión de la empresa</label>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="mision" rows="3" ><?php echo $mision; ?></textarea>
    </div>
    
    
    <!-- Subject -->
    <label>Visión de la empresa</label>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="vision" rows="3" ><?php echo $vision; ?></textarea>
    </div>


    <!-- Subject -->
    <label>Valores de la empresa</label>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="valores" rows="3" ><?php echo $valores; ?></textarea>
    </div>


    <!-- Send button -->
    <button type="submit" name="guardar" class="btn btn-info btn-block" type="submit">Guardar</button>

</form>
<!-- Default form contact -->

</div>

</div>
</div>



<?php
include "footer.php";
?>