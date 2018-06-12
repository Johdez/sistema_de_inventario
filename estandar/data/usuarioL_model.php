<?php
    $usuarios = new DataUsuarios();
    if(isset($_GET['q'])){
        $usuarios->$_GET['q']();
    }
    class DataUsuarios {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //obtener tooos los usuarios
        function getUsuarios($search){
            $q = "select * from usuarios where id_usuario like '%$search%' or nombres like '%$search%' or apellidos like '%$search%' or codigo like '%$search%' or rol like '%$search%' order by id_usuario asc";
            $r = mysql_query($q);
            
            return $r;
        }
        //obtener el usuario por su ID
        function getUsuarioID($id){
            $q = "select * from usuarios where id_usuario=$id";
            $r = mysql_query($q);
            
            return $r;
        }

    }
?>