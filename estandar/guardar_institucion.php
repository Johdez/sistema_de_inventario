<?php
   include('../config.php'); 


$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];



if(isset($codigo))
{
	 $q = mysql_query("SELECT * FROM institucion where codigo='$codigo'");

	if( mysql_num_rows($q) == 0)
	{
 

	
		$query="INSERT INTO institucion VALUES ('$codigo','$nombre')";
		$resultado=mysql_query($query) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
			if ($fila)
			{
			echo "";

			}
			else
			{
				header("location:agregarInstitucion.php");
			}
	}
	else
	{
		
		echo "
		<script>
			alert('El codigo de  institucion ya existe. Ingresar otro por favor');
			window.location.href='agregarInstitucion.php';
		</script>";
	
	}

	
}
else
{
	header("location:agregarInstitucion.php");
}

?>
