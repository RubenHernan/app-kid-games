
<?php 

include("connection.php");

if(isset($_GET["Id"])){

  $Id = base64_decode($_GET["Id"]);


  //validado
  $query = "SELECT Titulo,Tema.Descripcion, Palabra, Pistas, tiempo FROM Juego 
  INNER JOIN Tema ON Juego.codTema = Tema.Codigo 
  INNER JOIN Ahorcado ON Juego.Codigo = Ahorcado.Codigo 
  where Juego.Codigo = ?";
  $resultado= mysqli_prepare($conn,$query);
  $validar=mysqli_stmt_bind_param($resultado, "i", $Id);
  $validar=mysqli_stmt_execute($resultado);
  if($validar==false){
    echo "Error al ejecutar la consulta";
  }
  else{
    $validar=mysqli_stmt_bind_result($resultado, $titulo, $tema, $palabra,$pistas, $tiempo);
    if(mysqli_stmt_fetch($resultado)){


?>

<script>

function declarar(){
  palabra = "<?php echo $palabra?>";
  minutos = <?php echo $tiempo?>;
  segundos = 0;
}


// Restablecer juego
function inicio() {
  declarar();
  pintarGuiones(palabra);
  generaABC("a","z");
  cargarSegundo();
  cont = 6;
  document.getElementById("intentos").innerHTML=cont;
}


function pista() {
  document.getElementById("hueco-pista").innerHTML = "<?php echo $pistas?>";
}

</script>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Jugar ahorcado</title>
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
    <link rel="stylesheet" href="../css/estilo-ahoracado.css?v=<?php echo time();?>">
  </head>
  <body>
      <div class="main-container">

        <h1 class="titulo"><?php echo $titulo?></h1>
        <h2 class="titulo"><?php echo $tema?></h2>
        <h1 id="msg-final"></h1>
        <h3 id="acierto"></h3>
        <div class="flex-row no-wrap">
          <h2 class="palabra" id="palabra"></h2>
          <picture>
            <img src="../images/img/ahorcado_6.png" alt="" id="image6">
            <img src="../images/img/ahorcado_5.png" alt="" id="image5">
            <img src="../images/img/ahorcado_4.png" alt="" id="image4">
            <img src="../images/img/ahorcado_3.png" alt="" id="image3">
            <img src="../images/img/ahorcado_2.png" alt="" id="image2">
            <img src="../images/img/ahorcado_1.png" alt="" id="image1">
            <img src="../images/img/ahorcado_0.png" alt="" id="image0">
          </picture>
        </div>
        <div class="flex-row" id="turnos">
          <div class="col">
            <h3>Intentos restantes: <span id="intentos">6</span></h3>
          </div>
          <div class="col">
          <div class="cont-temporizador">
                  <div class="bloque">
                      <div class="minutos" id="minutos">--</div>
                      <p>M</p>
                  </div>
                  <div class="bloque">
                      <div class="segundos" id="segundos">--</div>
                      <p>S</p>
                  </div>
            </div>
            </div>
          </div>

        
        <div class="flex-row">
          <div class="col">
            <div class="flex-row" id="abcdario">
            </div>
          </div>
          <div class="col">

            <button onclick="inicio()" id="reset">Reiniciar</button>
            <button onclick="pista()" id="pista">Quiero una pista</button>

    
            <span id="hueco-pista"></span>


          </div>
        </div>

      </div>
    <script src="../js/ahorca.js"></script>
  </body>
</html>

<?php

}else{
  echo '<script type="text/javascript">alert("Error");
    window.location.href="index.php";
                        </script>';
}

$resultado->close();

}



}

$conn->close();

?>