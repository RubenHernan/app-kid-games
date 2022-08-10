<?php 

	include("connection.php");

	if(isset($_GET["Id"])){

		$Id = base64_decode($_GET["Id"]);
		$query = "SELECT Titulo,Privado, codTema,Fecha,Palabra, Pistas, Tiempo FROM Juego
    INNER JOIN Tema ON Juego.codTema = Tema.Codigo
    INNER JOIN Ahorcado ON Juego.Codigo = Ahorcado.Codigo 
    where Juego.codigo =  $Id";

		$resultado= mysqli_query($conn,$query);
		if(mysqli_num_rows($resultado)==1){
			$registro=mysqli_fetch_array($resultado); //transforma a un array
			$titulo=$registro["Titulo"];
			$privado=$registro["Privado"];
			$codTema=$registro["codTema"];
			$palabra=$registro["Palabra"];
			$tiempo=$registro["Tiempo"];
      $pistas=$registro["Pistas"];

		}

	}

 ?>


<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    <title>Editar ahorcado</title>
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


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.php">Kiddos</a>
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
            <h1 class="mb-2 bread">EDITAR AHORCADO</h1>
          
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
	 <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
        <form action="edit/eAhorcado.php?Id=<?php echo base64_encode($Id) ?>" method="POST">
        
        <div class="form-group">
               <p>Título</p> <input type="text" class="form-control" name="tituloE" placeholder="Ingrese titulo..." value="<?php echo $titulo?>">
        </div>
      
        <div class="form-group">  
        <p>Tema</p>
            <select name="temaE" class="form-control">
                <option value="">Seleccione tema...</option>
                
                <?php
                    $query="SELECT  * FROM Tema WHERE codUsuario = 2";
                    $result=mysqli_query($conn, $query) or die (mysqli_error());
                    while ($row=mysqli_fetch_array($result)){
					if($row['Codigo'] == $codTema){
						echo '<option value="'.$row['Codigo'].'" selected>'.$row['Descripcion'].'</option>';
					}else{
						echo '<option value="'.$row['Codigo'].'">'.$row['Descripcion'].'</option>';
					}
                    
                }
                ?>
            </select> 

        </div>

        <div class="form-group">       
            <p>Palabra</p> <input type="text" class="form-control" name="palabraE" placeholder="Ingrese palabra para el juego..." value="<?php echo $palabra?>">
        </div>   
        <div class="form-group">       
            <p>Pista</p> <input type="text" class="form-control" name="pistaE" placeholder="Ingrese pista para el juego..." value="<?php echo $pistas?>">
        </div>        
        <div class="form-group">       
            <p>Tiempo (minutos)</p> <input type="number" class="form-control" name="tiempoE" min="1" max="5" value="<?php echo $tiempo?>">
        </div> 
			<div class="form-group">
			<p>Privacidad</p> 
				<label class="switchBtn">
					<?php  
					if($privado == true){
						echo '<input class="inputc" type="checkbox" name="visibilidad" checked>';
					}else{
						echo '<input class="inputc" type="checkbox" name="visibilidad">';
					}
					?>
    				
    				<div class="slide round">Privado</div>
				</label>
			
			</div>  

        <div class="form-group text-center">
            <br>
            <input type="submit" name="updateA" value="Actualizar" class="form-group btn bg-primary btn-primary py-3 px-5" style="color: black;">
                
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
  <script src="../js/main.js"></script>




 	

?>