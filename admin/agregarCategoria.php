<?php
    include('include/header.php');
    include('include/sidebar.php');  
$query = "SELECT * FROM institucion ORDER BY codigo ASC";
$ins = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>

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
	<h1>Registrar Categoria</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="guardar_categoria.php" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo*</label>
    <div class="col-md-6">
      <input type="text" name="codigoC" class="form-control" required id="Codigo" placeholder="Codigo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombreC" class="form-control" required id="nombre" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo*</label>
    <div class="col-md-6">
              <select aria-required="true" name="tipo" required class="form-control">
          <option value="">Elegir una opción</option>
          <option value="Equipo">Equipo</option>
            <option value="Mobiliario">Mobiliario</option>

     
          
      </select> 
    </div>
  </div>



  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Registrar Categoria</button>
    </div>
  </div>
</form>
	</div>
</div>
</div>
</div>
<?php include('include/footer.php');