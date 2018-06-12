<?php
   include('../config.php'); 


$codigo=$_POST['codigoS'];
$nombre=$_POST['nombreS'];
$codIn=$_POST['institucion'];


if(isset($codigo))
{
	 $q = mysql_query("SELECT * FROM sector AS S INNER JOIN institucion AS I ON S.codigo=I.codigo AND S.codigoS = '$codigo' AND S.codigo='$codIn'");

	if( mysql_num_rows($q) == 0)
	{
 
	 	//OBTENER EL VALOR MAXIMO DEL ULTIMO REGISTRO
		$res = mysql_query("SELECT MAX(idSector) AS cor FROM sector");
		if ($row = mysql_fetch_row($res)) 
		{
			$id = trim($row[0]);
		}
		$idS=$id+1;

	
		$query="INSERT INTO sector (idSector,codigoS, nombreS, codigo) VALUES ('$idS','$codigo','$nombre','$codIn')";
		$resultado=mysql_query($query) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
			if ($fila)
			{
			echo "";

			}
			else
			{
				header("location:ubicacionLista.php");
			}
	}
	else
	{
		
		echo "
		<script>
			alert('El codigo de sector ya existe. Ingresar otro por favor');
			window.location.href='agregarUbicacion.php';
		</script>";
	
	}

	
}
else
{
	header("location:agregarUbicacion.php");
}

?>
