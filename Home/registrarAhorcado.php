<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    <title>Registrar ahorcado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html">Kiddos</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Teacher</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="" class="nav-link">Pricing</a></li>
	        	<li class="nav-item active"><a href="ahorcado.php" class="nav-link">Ahorcado</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

      <section class="hero-wrap hero-wrap-3 bg-light">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">REGISTRAR AHORCADO</h1>
          
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
	 <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
        <form name="formulario" action="save/saveAhorcado.php" method="POST">
        
        <div class="form-group">
               <p>Título</p> <input type="text" class="form-control" name="titulo" placeholder="Ingrese titulo...">
        </div>
      
        <div class="form-group">  
        <p>Tema</p>
            <select name="tema" class="form-control">
                <option value="">Seleccione tema...</option>
                
                <?php
                    include "connection.php";
                    $query="SELECT  * FROM Tema WHERE codUsuario = 2";
                    $result=mysqli_query($conn, $query) or die (mysqli_error());
                    while ($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['Codigo'].'">'.$row['Descripcion'].'</option>';
                }
                ?>
            </select> 

        </div>

        <div class="form-group">       
            <p>Palabra</p> <input type="text" class="form-control" name="palabra" placeholder="Ingrese palabra para el juego...">
        </div>        
        <div class="form-group">       
            <p>Tiempo (minutos)</p> <input type="number" class="form-control" name="tiempo" min="1" max="5" value="5">
        </div> 
        <div class="form-group text-center">
            <br>
            <input type="submit" name="private" value="Guardar en privado" class="form-group btn bg-dark btn-primary py-3 px-5" style="color: white;">
            <input type="submit" name="public" value="Guardar y publicar" class="form-group btn bg-primary btn-primary py-3 px-5" style="color: black;">
                
        </div>
        
 

        </form>
            </div>
            </div>
        </div>
        </section>


        <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>


</body>
</html>