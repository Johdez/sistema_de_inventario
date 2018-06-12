<?php
   include('../config.php'); 


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$dui=$_POST['dui'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];
$telefono=$_POST['telefono'];
$sexo=$_POST['sexo'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$rol=$_POST['rol'];
$institucion=$_POST['institucion'];




if(isset($usuario))
{
	 $q = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario'");

	if( mysql_num_rows($q) == 0)
	{
 
	 	//OBTENER EL VALOR MAXIMO DEL ULTIMO REGISTRO
		$res = mysql_query("SELECT MAX(id_usuario) AS cor FROM usuarios");
		if ($row = mysql_fetch_row($res)) 
		{
			$idU = trim($row[0]);
		}

		$idS=$idU+1;

		
		$query="INSERT INTO usuarios VALUES ('$idS','$nombre','$apellidos','$dui','$direccion','$fecha','$telefono','$sexo','$email','$usuario','$password','$rol','$institucion')";
		$resultado=mysql_query($query) or die (mysql_error());
		$fila=mysql_fetch_array($resultado);
			if ($fila)
			{
			echo "";

			}
			else
			{
				header("location:usuario.php");
			}
	}
	else
	{
		
		echo "
		<script>
			alert('El codigo de sector ya existe. Ingresar otro por favor');
			window.location.href='agregarUsuario.php';
		</script>";
	
	}

	
}
else
{
	header("location:frmprincipal.php");
}

?>
