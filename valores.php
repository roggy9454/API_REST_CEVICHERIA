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
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft" data-wow-delay="0.3s">

            <h1 class="display-5 font-weight-bold"><?php echo $nombre; ?></h1>   
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Valores:</strong>
                  </h3>
                  <hr>
                </div>
                <!--Body-->

            <div class="text-justify">    
                <h5><?php echo $valores; ?></h5>       
            </div>
            
          
              </div>
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
      
      
      
      
      
  <?php include "footer.php"; ?>     