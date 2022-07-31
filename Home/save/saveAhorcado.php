<?php 

	include("../connection.php");


	$titulo=$_POST['titulo'];
	$tema=$_POST['tema'];
    $palabra=$_POST['palabra'];
    $tiempo=$_POST['tiempo'];
    $date=date('Y/m/d h:i:s', time());
    
	if(isset($_POST['private']))
{
    // insertar en privado

    $query = "INSERT INTO Juego (Titulo,Tipo,Tiempo,Fecha,Privado,Vigente,CodTema,palabra) values ('$titulo', 1 , $tiempo ,'$date', 1, 1, $tema, '$palabra' )";
    $resultado=mysqli_query($conn,$query);
    if ($resultado) {

        echo '<script type="text/javascript">alert("Juego Registrado.");
        window.location.href="../ahorcado.php";
                            </script>';

    }else
    {
        die("Fallo al registrar Juego");
    }


}else
{
//insertar en publico
$query = "INSERT INTO Juego (Titulo,Tipo,Tiempo,Fecha,Privado,Vigente,CodTema,palabra) values ('$titulo', 1 , $tiempo ,'$date', 0, 1, $tema, '$palabra' )";
$resultado=mysqli_query($conn,$query);
if ($resultado) {

    echo '<script type="text/javascript">alert("Juego Registrado y publicado!.");
    window.location.href="../ahorcado.php";
                        </script>';

}else
{
    die("Fallo al registrar Juego");
}
}






 ?>