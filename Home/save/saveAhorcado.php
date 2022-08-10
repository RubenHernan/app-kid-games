<?php 

	include("../connection.php");


	$titulo=$_POST['titulo'];
	$tema=$_POST['tema'];
    $palabra=$_POST['palabra'];
    $tiempo=$_POST['tiempo'];
    $pistas=$_POST['pistas'];
    $date=date('Y/m/d', time());
    
	if(isset($_POST['private']))
{
    // insertar en privado
    $pr = 1;
    $query = "CALL insertarJuegoAhorcado(?,?, ?,?, ?,?,?);";

    $resultado= mysqli_prepare($conn,$query);
    $validar=mysqli_stmt_bind_param($resultado, "sisiiss", $titulo, $tiempo,$date,$pr, $tema,$palabra,$pistas);
    $validar=mysqli_stmt_execute($resultado);    
    
    if($validar==false){
        die("Fallo al registrar Juego");

      }else{
        echo '<script type="text/javascript">alert("Juego Registrado.");
        window.location.href="../ahorcado.php";
                            </script>';
      }



}else
{
//insertar en publico

$pr = 0;
$query = "CALL insertarJuegoAhorcado(?,?, ?,?, ?,?,?);";

$resultado= mysqli_prepare($conn,$query);
$validar=mysqli_stmt_bind_param($resultado, "sisiiss", $titulo, $tiempo,$date,$pr, $tema,$palabra,$pistas);
$validar=mysqli_stmt_execute($resultado);    

if($validar==false){
    die("Fallo al registrar Juego");

  }else{
    echo '<script type="text/javascript">alert("Juego Registrado y publicado!.");
    window.location.href="../ahorcado.php";
                        </script>';
  }
}






 ?>