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


        function updateUsuario(){
            include('../../config.php');
            $id = $_POST['id_usuario'];
            $nombre = $_POST['nombre'];
             $apellido = $_POST['apellido'];
             $dui = $_POST['dui'];
            $direccion = $_POST['direccion'];
             $fecha = $_POST['fecha'];
            $telefono = $_POST['telefono'];
             $sexo = $_POST['sexo'];
            $email = $_POST['email'];
             $usuario = $_POST['usuario'];
           
             
    
           
           $q="update usuarios set  nombres='$nombre', apellidos='$apellido', dui='$dui', direccion='$direccion', fecha_nacimiento='$fecha', telefono='$telefono' ,sexo='$sexo' , email='$email', usuario='$usuario' where id_usuario='$id'"; 

            mysql_query($q);
            header('location:../usuario.php?r=updated');
        }
       


    }
?>