<?php
    include('include/header.php');
    include('include/sidebar.php');  
$query1 = "SELECT * FROM institucion ORDER BY codigo ASC";
$ins = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());

$query2 = "SELECT * FROM sector ORDER BY codigoS ASC";
$ubi = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());

$query3 = "SELECT * FROM categoria WHERE tipo='Equipo' ORDER BY codigoC ASC";
$cat = mysql_query($query3) or die('Consulta fallida: ' . mysql_error());




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
	<h1>Registrar Equipos</h1>
	<br>
		<form class="form-horizontal" method="post" id="afrmMobiliario" action="guardar_equipo.php" role="form">




  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria*</label>
    <div class="col-md-6">
              <select aria-required="true" name="categoria" required class="form-control">
          <option value="">Elegir una opción</option>
          <?php while ($arreg1 = mysql_fetch_array($cat)) { ?>
          
          <option value ="<?php echo $arreg1['codigoC']?>"><?php echo $arreg1['nombreC']?></option>
        <?php } ?>
          
      </select> 
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Marca*</label>
    <div class="col-md-6">
      <input type="text" name="marca" class="form-control" required id="marca" placeholder="Marca">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Modelo*</label>
    <div class="col-md-6">
      <input type="text" name="modelo" class="form-control" required id="model" placeholder="Modelo">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-md-6">
      <input type="text" name="descripcion" class="form-control" id="descrip" placeholder="Descripcion">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Valor*</label>
    <div class="col-md-6">
      <input type="number" step="any" name="valor" class="form-control" required id="valor" placeholder="Valor $">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Recepcion</label>
    <div class="col-md-6">
      <input type="date" name="fechaR" class="form-control" id="fechar" placeholder="Fecha de Recepcion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Adquisicion</label>
    <div class="col-md-6">
      <input type="date" name="fechaA" class="form-control" id="fechaA" placeholder="Fecha Adquisicion">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
     <div class="col-md-6">
    <select aria-required="true" name="estado" required class="form-control">
        <option value="">Elegir una opción</option>
        <option>Bueno</option>
        <option>Regular</option>
        <option>Malo</option>
        
      </select>  
    </div>
</div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Institucion*</label>
    <div class="col-md-6">
              <select aria-required="true" name="institucion" required class="form-control">
          <option value="">Elegir una opción</option>
          <?php while ($arreg3 = mysql_fetch_array($ins)) { ?>
          
          <option value ="<?php echo $arreg3['codigo']?>"><?php echo $arreg3['nombre']?></option>
        <?php } ?>
          
      </select> 
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Ubicacion*</label>
    <div class="col-md-6">
              <select aria-required="true" name="ubicacion" required class="form-control">
          <option value="">Elegir una opción</option>
          <?php while ($arreg2 = mysql_fetch_array($ubi)) { ?>
          
          <option value ="<?php echo $arreg2['idSector']?>"><?php echo $arreg2['nombreS']?></option>
        <?php } ?>
          
      </select> 
    </div>
  </div>



  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Equipo</button>
    </div>
  </div>
</form>
	</div>
</div>
</div>
</div>
<?php include('include/footer.php');