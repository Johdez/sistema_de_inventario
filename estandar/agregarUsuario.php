<?php
    include('include/header.php');
    include('include/sidebar.php');  

$query = "SELECT * FROM institucion ORDER BY codigo ASC";
$ins = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>

<style>

    input[type=number]::-webkit-outer-spin-button,

    input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;

    }
    input[type=number] {
      -moz-appearance:textfield;

    }

  </style>

<div id="page-wrapper">    
    <div class="container-fluid">


<div class="row">
	<div class="col-md-12">
	<h1>Registrar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" id="frmRegistrar" action="guardar_usuario.php" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" class="form-control" required id="nombre" placeholder="Nombres">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" class="form-control" required id="apelllidos" placeholder="Apellidos">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero DUI*</label>
    <div class="col-md-6">
      <input type="text" name="dui" class="form-control" required id="dui" placeholder="Numero de DUI">
    </div>
  </div>



    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacimiento*</label>
    <div class="col-md-6">
      <input type="date" name="fecha" class="form-control" required id="fecha" placeholder="Fecha de Nacimiento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Numero de telefono">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sexo*</label>
     <div class="col-md-6">
    <select aria-required="true" name="sexo" required class="form-control">
        <option value="">Elegir una opción</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        
      </select>  
    </div>
</div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" required id="email" placeholder="Correo Electronico">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Usuario*</label>
    <div class="col-md-6">
      <input type="text" name="usuario" class="form-control" required id="usu" placeholder="Nombre de Usuario">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contraseña*</label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" required id="pass" placeholder="Contrase&ntilde;a">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Institucion*</label>
    <div class="col-md-6">
              <select aria-required="true" name="institucion" required class="form-control">
          <option value="">Elegir una opción</option>
          <?php while ($arreg1 = mysql_fetch_array($ins)) { ?>
          
          <option value ="<?php echo $arreg1['codigo']?>"><?php echo $arreg1['nombre']?></option>
        <?php } ?>
          
      </select> 
    </div>
  </div>


  <div class="form-group">
    <label for="inputrol" class="col-lg-2 control-label">Rol*</label>
     <div class="col-md-6">
    <select aria-required="true" name="rol" required class="form-control">
        <option value="">Elegir una opción</option>
        <option value="admin">Administrador</option>
        <option value="estandar">Usuario</option>
        
      </select>  
    </div>
</div>





  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </div>
  </div>
</form>
	</div>
</div>
</div>
</div>
<?php include('include/footer.php');