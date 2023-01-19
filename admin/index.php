<?php
include "header.php";
include "../db.php";

	$sql="SELECT count(*) FROM clientes  ";
	$resultado=mysqli_query($conn,$sql);
	$row_cnt=implode(mysqli_fetch_assoc($resultado));
	
	$sql2="SELECT count(*) FROM productos  ";
	$resultado2=mysqli_query($conn,$sql2);
	$row_cnt2=implode(mysqli_fetch_assoc($resultado2));
	
	$sql3="SELECT count(*) FROM provedores  ";
	$resultado3=mysqli_query($conn,$sql3);
	$row_cnt3=implode(mysqli_fetch_assoc($resultado3));

?>



<div class="container my-5 py-5">

  <!-- Section: Block Content -->
  <section>
    
    <style>
      .footer-hover {
        background-color: rgba(0, 0, 0, 0.1);
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
      }

      .footer-hover:hover {
        background-color: rgba(0, 0, 0, 0.2)
      }

      .text-black-40 {
        color: rgba(0, 0, 0, 0.4)
      }
    </style>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mb-4">

        <!-- Card -->
        <div class="card primary-color white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0"><?php echo $row_cnt ?></p>
              <p class="h5 font-weight-bold mb-0">Clientes Registrados</p>
            </div>
            <div>
              <i class="fas fa-shopping-bag fa-5x text-black-40"></i>
            </div>
          </div>
          
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 mb-4">

        <!-- Card -->
        <div class="card warning-color white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0"><?php echo $row_cnt2 ?></p>
              <p class="h5 font-weight-bold mb-0">Productos Registrados</p>
            </div>
            <div>
              <i class="fas fa-chart-bar fa-5x text-black-40"></i>
            </div>
          </div>
          
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 mb-4">

        <!-- Card -->
        <div class="card success-color white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0"><?php echo $row_cnt3 ?></p>
              <p class="h5 font-weight-bold mb-0">Proveedores Registrados</p>
            </div>
            <div>
              <i class="fas fa-user-plus fa-5x text-black-40"></i>
            </div>
          </div>
          
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 mb-4">

        <!-- Card -->
        <div class="card red accent-2 white-text">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <p class="h2-responsive font-weight-bold mt-n2 mb-0"></p>
              <p class="h5 font-weight-bold mb-0">Registro, modificación o eliminación de la Información General de la Empresa</p>
            </div>
            <div>
              <i class="fas fa-chart-pie fa-5x text-black-40"></i>
            </div>
          </div>
          
        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Block Content -->

</div>



<?php
include "footer.php";
?>