<?php
   include('../config.php'); 



$categoria=$_POST['categoria'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$descripcion=$_POST['descripcion'];
$valor=$_POST['valor'];
$fechaR=$_POST['fechaR'];
$fechaA=$_POST['fechaA'];
$estado=$_POST['estado'];
$institucion=$_POST['institucion'];
$ubicacion=$_POST['ubicacion'];

//OBTENER EL VALOR MAXIMO DEL ULTIMO REGISTRO
$rs = mysql_query("SELECT MAX(numero) AS cor FROM equipo WHERE codigoC='$categoria'");
if ($row = mysql_fetch_row($rs)) 
{
$id = trim($row[0]);
}
$n=$id+1;
 
 //funcion para generar ceros
function generar0($numero,$cantidad0) 
{
    return str_pad((int) $numero,$cantidad0,"0",STR_PAD_LEFT);
}
$n= generar0($n,4);
  



	$codigo=$institucion."-".$categoria."-".$n;



	$m = mysql_query("SELECT * FROM equipo WHERE codigoM = '$codigo'");



	if( mysql_num_rows($m) == 0)
	{

	
		$query="INSERT INTO equipo VALUES ('$codigo','$n','$marca','$modelo','$valor','$fechaR','$fechaA','$descripcion','$estado','$categoria','$ubicacion','$institucion')";
		$resultado=mysql_query($query) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
		if ($fila)
		{
			echo "";

		}
		else
		{
			header("location:equipoIndex.php");
		}
	}
	else
	{
		echo "
			<script>
			alert('El codigo de equipo ya existe. Ingresar otro por favor');
			window.location.href='agregarEquipo.php';
		</script>";	;
	
	}

?>