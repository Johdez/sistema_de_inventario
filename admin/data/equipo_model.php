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
        function getEquipoID($id){
             $q = "select * from equipo where codigoE like '%$search%'  or marca like '%$search%' or modelo like '%$search%' or estado like '%$search%' order by codigoE asc";
           
            $r = mysql_query($q);
            
            return $r;
        }

            function updateEquipo(){
            include('../../config.php');
            $codigoE = $_POST['codigoE'];
            $numero = $_POST['numeroE'];
            $marca = $_POST['marcaE'];
            $modelo = $_POST['modeloE'];
            $valor = $_POST['valorE'];
            $fechaR = $_POST['fechaRE'];
            $fechaA = $_POST['fechaAE'];
            $descripcion = $_POST['descripcionE'];
            $estado = $_POST['estadoE'];
            $codigoC = $_POST['codigoCE'];
            $idSector = $_POST['idSectorE'];
            $codigo = $_POST['codigo'];
    
           
           $q="update equipo set marca='$marca', modelo='$modelo', valor='$valor', fechaR='$fechaR', fechaA='$fechaA',descripcion='$descripcion',estado='$estado',codigoC='$codigoC', idSector='$idSector', codigo='$codigo' where codigoE='$codigoE'"; 

            mysql_query($q);
            header('location:../equipoIndex.php?r=updated');
        }


    }
?>