<?php 

	include("../connection.php");

	if(isset($_GET["Id"])){

    $Id = base64_decode($_GET["Id"]);

    $query = "UPDATE Juego SET Vigente= 1 WHERE Codigo = ?";

    $resultado= mysqli_prepare($conn,$query);
    $validar=mysqli_stmt_bind_param($resultado, "i", $Id);
    $validar=mysqli_stmt_execute($resultado); 
    
    if ($validar) {

        
		echo '<script type="text/javascript">alert("Juego del ahorcado Restaurado!!.");
		window.location.href="../ahorcado.php";
		   </script>';

    }else
    {
        die("Fallo al eliminar Juego");
    }

	}
 ?>
