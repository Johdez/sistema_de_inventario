<?php    
    require('config.php');
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $pass =($_POST['pass']);
        $query = "select * from usuarios where usuario='$user' and password='$pass'";
        $r = mysql_query($query);
        if(mysql_num_rows($r) == 1){
            $row = mysql_fetch_assoc($r);
            $_SESSION['level'] = $row['rol'];
            $_SESSION['id'] = $row['usuario'];
            $_SESSION['name'] = $row['nombres'].' '.$row['apellidos'];
            header('location:'.$row['level'].'');
        }else{
            header('location:index.php?login=0');
        }
    }

    if(isset($_SESSION['level'])){
        header('location:'.$_SESSION['level'].'');   
    }
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Loguearse</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
  </head>
  <body>
    <center>
    <div class="container">
      <form class="form-horizontal" action="index.php" method="post">
        <div class="form-group">
     

<div class="container">
  <br>
  <h2>CENTRO ESCOLAR DR. JOAQUIN JULE GALVEZ</h2>
 <br>
 <br>
  <h2>Aula Informática</h2>
  <br>
  <br>
  <h2>Sistema de Control de Inventario</h2>
  <br>
  <br>
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Entrar</button>

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="user"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" size="35" name="user" placeholder="Usuario" required="required" autofocus="autofocus" maxlength="25"> 
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" size="35"  size="35" name="pass" placeholder="Contraseña" required="required" autofocus="autofocus" maxlength="20" >
            </div>
            
              <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"</span> Iniciar</button>
          </form>
        </div>
        
      </div>
      
    </div>
  </div> 
</div>
</div>
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
</center>
</body>
</html>
