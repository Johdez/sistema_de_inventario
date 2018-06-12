<?php
   include('../config.php'); 


$codigo=$_POST['codigoC'];
$nombre=$_POST['nombreC'];
$tipo=$_POST['tipo'];


if(isset($codigo))
{
	 $q = mysql_query("SELECT * FROM categoria WHERE codigoC='$codigo'");

	if( mysql_num_rows($q) == 0)
	{
 


	
		$query="INSERT INTO categoria  VALUES ('$codigo','$nombre','$tipo')";
		$resultado=mysql_query($query) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
			if ($fila)
			{
			echo "";

			}
			else
			{
				header("location:categoriaLista.php");
			}
	}
	else
	{
		
		echo "
		<script>
			alert('El codigo de sector ya existe. Ingresar otro por favor');
			window.location.href='agregarCategoria.php';
		</script>";
	
	}

	
}
else
{
	header("location:agregarCategoria.php");
}

?>
