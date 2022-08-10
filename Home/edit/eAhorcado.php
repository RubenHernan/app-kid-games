<?php
include("../connection.php");

if(isset($_POST["updateA"])){

    $Id = base64_decode($_GET["Id"]);
$titulo=$_POST["tituloE"];
$palabra=$_POST["palabraE"];
$tema=$_POST["temaE"];
$tiempo=$_POST["tiempoE"];
$pistas=$_POST["pistaE"];
$date=date('Y/m/d', time());

if(isset($_POST["visibilidad"])){
    $visibilidad=1;
}else{
    $visibilidad=0;
}


$query="UPDATE Juego SET Titulo=?, codTema=?, tiempo=? ,Privado=? ,Fecha= ? WHERE Codigo = ?";
$query2="UPDATE Ahorcado SET Palabra=?, Pistas=? WHERE Codigo = ?";

$resultado= mysqli_prepare($conn,$query);
$validar=mysqli_stmt_bind_param($resultado, "siiisi", $titulo, $tema,$tiempo,$visibilidad,$date ,$Id);
$validar=mysqli_stmt_execute($resultado); 

$resultado2= mysqli_prepare($conn,$query2);
$validar2=mysqli_stmt_bind_param($resultado2, "ssi", $palabra, $pistas, $Id);
$validar2=mysqli_stmt_execute($resultado2); 

if ($validar && $validar2) {


echo '<script type="text/javascript">alert("Juego del ahorcado Actualizado!!.");
window.location.href="../ahorcado.php";
   </script>';

}else
{
die("Fallo al actualizar Juego");
}




}

?>