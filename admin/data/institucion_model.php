<?php

    $institucion = new Datainstitucion();

    if(isset($_GET['q'])){
        $institucion->$_GET['q']();
    }

    class Datainstitucion {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //obtener la informacion de las instituciones
        function getinstitucion($search){
            $q = "select * from institucion where codigo like '%$search%' or nombre like '%$search%'  order by codigo,nombre";
            $r = mysql_query($q);
            
            return $r;
        }
        
        // obtener la informacion de las instituciones mediante su codigo
        function getinstitucionID($id){
            $q = "select * from institucion where codigo=$id";
            $r = mysql_query($q);
            
            return $r;
        }


        
        function updateInstitucion(){
            include('../../config.php');
            $id = $_POST['codigo'];
            $nombre = $_POST['nombre'];
    
           
           $q="update institucion set codigo='$id', nombre='$nombre' where codigo='$id'"; 

            mysql_query($q);
            header('location:../institucionLista.php?r=updated');
        }
        

        
    }
?>