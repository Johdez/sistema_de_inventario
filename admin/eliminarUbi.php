<?php


    include('include/header.php');

   
    $sector=$_GET['ubicacion'];



$q = "DELETE  FROM sector WHERE idSector='$sector'";
$rs = mysql_query($q);
if($rs == false) {
	header("location:ubicacionLista.php");
}else{
	header("location:ubicacionLista.php");
}

?>