<?php 

	include("../connection.php");

	if(isset($_GET["Id"])){
        $Id = $_GET["Id"];
        $query="UPDATE Juego SET Vigente=0 WHERE Codigo = $Id";

		$resultado=mysqli_query($conn,$query);
    if ($resultado) {

        
		echo '<script type="text/javascript">alert("Juego del ahorcado Eliminado!!.");
		window.location.href="../ahorcado.php";
		   </script>';

    }else
    {
        die("Fallo al eliminar Juego");
    }

	}
 ?>
