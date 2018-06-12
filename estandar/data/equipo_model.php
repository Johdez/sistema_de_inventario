<?php

    $equipo = new DataEquipo();
    if(isset($_GET['q'])){
        $equipo->$_GET['q']();
    }
    class DataEquipo {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //obtener todos los mobiliarios
        function getEquipo($search){
             $q = "select E.codigoE, E.marca, E.modelo, E.valor, E.fechaR, E.fechaA, E.descripcion, E.estado, C.nombreC, S.codigoS, E.codigo from equipo AS E INNER JOIN categoria AS C ON E.codigoC=C.codigoC INNER JOIN sector AS S ON E.idSector=S.idSector where E.codigoE like '%$search%'  or E.marca like '%$search%' or E.modelo like '%$search%' or E.estado like '%$search%' or E.descripcion like '%$search%' or C.nombreC like '%$search%' order by E.codigoE asc";
           
            $r = mysql_query($q);
            
            return $r;
        }
        //obtener por codico
        function getEquipoD($id){
            $q = "select * from equipo where codigoE=$id";
            $r = mysql_query($q);
            
            return $r;
        }

        

    }
?>