<?php
      include('include/header.php');  
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Mobiliario.odt");

header("Pragma: no-cache");
  header("Expires: 0");

	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>REPORTE DE MOBILIARIO</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>CODIGO</strong></td>
     <td><strong>NOMBRE</strong></td>
    <td><strong>MARCA</strong></td>
    <td><strong>MODELO</strong></td>
     <td><strong>VALOR</strong></td>
    <td><strong>FECHA RECEPCION</strong></td>
    <td><strong>FECHA ADQUISICION</strong></td>
     <td><strong>DESCRIPCION</strong></td>
    <td><strong>ESTADO</strong></td>


  </tr>
  
<?PHP
		
$sql=mysql_query("select * from mobiliario AS m INNER JOIN categoria as c ON  m.codigoC=c.codigoC");
while($res=mysql_fetch_array($sql)){		

	$codigo=$res["codigoM"];
	$nombre=$res["nombreC"];
  $marca=$res["marca"];
  $modelo=$res["modelo"];
  $valor=$res["valor"];
  $fechaR=$res["fechaR"];
  $fechaA=$res["fechaA"];
  $descripcion=$res["descripcion"];
  $estado=$res["estado"];
 
				

?>  
 <tr>
	<td><?php echo $codigo; ?></td>
	<td><?php echo $nombre; ?></td>
    <td><?php echo $marca; ?></td>
  <td><?php echo $modelo; ?></td>
    <td><?php echo $valor; ?></td>
  <td><?php echo $fechaR; ?></td>
    <td><?php echo $fechaA; ?></td>
  <td><?php echo $descripcion; ?></td>
    <td><?php echo $estado; ?></td>

	                    
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>