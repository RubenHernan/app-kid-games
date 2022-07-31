
<?php 

include("connection.php");

if(isset($_GET["Id"])){

  $Id = $_GET["Id"];
  $query = "SELECT Titulo,Tema.Descripcion, palabra, tiempo FROM Juego INNER JOIN Tema ON Juego.codTema = Tema.Codigo where Juego.Codigo = $Id";
  $resultado= mysqli_query($conn,$query);
  if(mysqli_num_rows($resultado)==1){
    $registro=mysqli_fetch_array($resultado); //transforma a un array
    $titulo=$registro["Titulo"];
    $tema=$registro["Descripcion"];
    $palabra=$registro["palabra"];
    $tiempo=$registro["tiempo"];

  }

}

?>

<script>

function generaPalabra() {

  palabra = "<?php echo $palabra?>";
  console.log(palabra);
}

</script>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Jugar ahorcado</title>
    <link rel="stylesheet" href="../css/estilo-ahoracado.css">
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
            <button onclick="inicio()" id="reset">Elegir otra palabra</button>
          </div>
          </div>
        
        <div class="flex-row">
          <div class="col">
            <div class="flex-row" id="abcdario">
            </div>
          </div>
          <div class="col"></div>
        </div>

      </div>
    <script src="../js/ahorcado.js"></script>
  </body>
</html>