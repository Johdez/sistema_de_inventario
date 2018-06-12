<?php
require('conexion.php');
session_start();
if(!$_SESSION)
{
	header("Location:index.php");
}

//variable de sesiones
$codI=$_SESSION['codIns'];//institucion
$corr=$_SESSION['num'];

$codMC=$_POST['cod_mobC'];
$nombre=$_POST['nom_mob'];
$marca=$_POST['mar_mob'];
$modelo=$_POST['mod_mob'];
$valor=$_POST['val_mob'];
$fechaR=$_POST['fecR_mob'];
$fechaA=$_POST['fecA_mob'];
$desc=$_POST['des_mob'];
$estad=$_POST['estado'];
$cat=$_POST['menuC'];
$sec=$_POST['menuS'];

$codig=$codI."-".$cat."-".$corr;


if(isset($codMC))
{

	$m = mysql_query("SELECT * FROM mobiliario WHERE codigoM = '$codig'");
	if( mysql_num_rows($m) == 0)
	{

	$codIns=$_SESSION['codIns'];
		$query="INSERT INTO mobiliario VALUES ('$codig','$nombre','$marca','$modelo','$valor','$fechaR','$fechaA','$desc','$estad','$corr','$codMC','1','$codI')";
		$resultado=mysql_query($query) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		if ($fila)
		{
			echo "";

		}
		else
		{
			header("location:mobiliarioIndex.php");
		}
	}
	else
	{
		echo "
			<script>
			alert('El codigo de mobiliario ya existe. Ingresar otro por favor');
			window.location.href='registro_mobiliario.php';
		</script>";	;
	
	}
}
else
{
	header("location:frmprincipal.php");
}
?>