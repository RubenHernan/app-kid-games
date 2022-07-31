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
    <title>Crear juego</title>
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
	        	<li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="teacher.html" class="nav-link">Teacher</a></li>
	        	<li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/ahorcado.jpg');">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">JUEGO: AHORCADO</h1>
            <p class="button text-center"><a href="registrarAhorcado.php" class="btn btn-primary px-4 py-3">Crear nuevo ahorcado</a></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
			<div class="container">
				<div class="row">
				<?php
				include "connection.php";
				$query = "SELECT Juego.Codigo, Titulo,Privado,Tema.Descripcion,Fecha, palabra, tiempo FROM Juego INNER JOIN Tema ON Juego.codTema = Tema.Codigo where Juego.tipo = 1 and Tema.codUsuario = 2 and Juego.Vigente = 1";
				$resultado = mysqli_query($conn, $query);
				while ($fila = mysqli_fetch_array($resultado)) { ?>

					<div class="col-md-6 course d-lg-flex ftco-animate">
						
						<div class="text bg-light p-4">
							<h3><a href="editarAhorcado.php"><?php echo $fila['Titulo']?></a></h3>
							<h4>Palabra: <?php echo $fila['palabra'] ?></h4>
							<p>Tema: <?php echo $fila['Descripcion'] ?></p>
							<p>Fecha: <?php echo $fila['Fecha'] ?></p>
							<p>Tiempo: <?php echo $fila['tiempo'] ?> minutos</p>
							<?php 
								if($fila['Privado'] == true){
									echo '<p class="subheading"><span>Privado</span></p>';
								}else{
									echo '<p class="subheading"><span>Público</span></p>';
								} ?>
						
						</div>
						<div class="boton p-4 bg-light"> 
						<p class="text-center"><a href="editAhorcado.php?Id=<?php echo $fila['Codigo'] ?>" class="btn btn-secondary">Editar</a></p>
						<p class="text-center boton1"><a href="delete/deleteAhorcado.php?Id=<?php echo $fila['Codigo'] ?>" class="btn btn-quarternary">Eliminar</a></p>	
						
					    </div>
					</div>

					<?php } ?>

				</div>
			</div>
		</section>




	  </div>
   </div>


</div>



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