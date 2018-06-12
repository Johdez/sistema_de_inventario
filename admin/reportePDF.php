<?php


require_once 'dompdf/dompdf_config.inc.php';
include('include/header.php');
?>
$html.='
$result=$mysqli->query("SELECT nombre FROM institucion WHERE);


while ($arr_result = $result->fetch_array())
{
$nombre=$arr_result[nombre];

}

$html.= "<table>";
$html.= "<tr>";
$html.= "<td>";
$html.= $nombre;
$html.= "</td>";
$html.= "</tr></table>";

$mipdf = new DOMPDF();

$mipdf ->set_paper("A4", "portrait");

$mipdf ->load_html(utf8_decode($html));

$mipdf ->render();

$mipdf ->stream('mipdf.pdf');