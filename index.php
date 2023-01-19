<?php 
include "header.php";
include "db.php";

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



      
      

      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 mb-4 white-text text-center">
            <h1 class="display-5 font-weight-bold"><?php echo $nombre; ?></h1> 
            <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>GAMBETEANDO EL PALADAR</strong></h5>
            <a href="productos.php" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Productos</a>
            <a href="ubicacion.php" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Ubicación</a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
      
      
      
      




<?php include "footer.php" ?>