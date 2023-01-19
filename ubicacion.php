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
  

<style> 

.map-container{
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container iframe{
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}

</style> 
      
      
      
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

                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
                 
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d498.69980709064777!2d-80.42314506282639!3d-0.6015057034326026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902bb5306ebbc5fb%3A0xf9dfb54b14f806b9!2sCevicheria%20Punto%20B%20de%20Ramon%20Betancourt!5e0!3m2!1ses!2sec!4v1670640826694!5m2!1ses!2sec"  allowfullscreen></iframe>                    
                </div>
                
                <!--Google Maps-->
        
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
      
      
      
      
      
  <?php include "footer.php"; ?>      
