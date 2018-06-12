<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/categoria_model.php');
    include('data/ubicacion_model.php');
    include('data/equipo_model.php');
    include('data/institucion_model.php');
    include('data/mobiliario_model.php');
    include('data/usuarioL_model.php');

    $id = $_GET['id'];
    $institucion = $institucion->getinstitucionID($id);
     $usuarios = $usuarios->getUsuarioID($id);
     $ubicacion = $ubicacion->getUbicacionID($id);
     $categoria=$categoria->getCategoriaID($id);
     $mobiliario=$mobiliario->getMobiliarioID($id);
     $equipo=$equipo->getEquipoID($id);
  
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>MODIFICAR</small>
                </h1>
                <?php 
                    $edit = new Edit();
                    $type = $_GET['type'];

                    if($type=='institucion')
                    {
                        $edit->editInstitucion($institucion);
                    }
                    else if($type=='categoria')
                    {
                        $edit->editCategoria($categoria);
                    }
                    else if($type=='mobiliario')
                    {
                        $edit->editMobiliario($mobiliario);   
                    }
                    else if($type=='equipo')
                    {
                        $edit->editEquipo($equipo);   
                    }
                     else if($type=='ubicacion')
                    {
                        $edit->editUbicacion($ubicacion);   
                    }
                     else if($type=='usuario')
                    {
                        $edit->editUsuarios($usuarios);   
                    }
                ?>
            </div>
        </div>


       


    </div>
    

</div>


<?php include('include/footer.php');

class Edit {
    
    function editInstitucion($institucion){ ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="institucionLista.php">Institucion</a>
            </li>
            <li class="active">
                Modificar
            </li>
        </ol>
        <hr />
        <div class="modal-body">
            <?php while($row = mysql_fetch_array($institucion)): ?>

            <form action="data/institucion_model.php?q=updateInstitucion&id=<?php echo $row['codigo'];?>" method="post">
            
                <div class="form-group">
                    Codigo<input type="text" class="form-control" value="<?php echo $row['codigo']; ?>" name="codigo" placeholder="Codigo" />
                </div>
                <div class="form-group">
                    Nombre<input type="text" class="form-control" value="<?php echo $row['nombre']; ?>" name="nombre" placeholder="nombre" />
                </div>
             

        </div>

        <div class="modal-footer">
            <a href="institucionLista.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Atras</button></a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Modificar</button>  
            
            <?php endwhile; ?>
            </form>
        </div>
        
<?php    
}


    function editUbicacion($ubicacion){ ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="ubicacionLista.php">Ubicacion</a>
            </li>
            <li class="active">
                Modificar
            </li>
        </ol>
        <hr />
        <div class="modal-body">
            <?php while($row = mysql_fetch_array($ubicacion)): ?>

            <form action="data/ubicacion_model.php?q=updateUbicacion&id=<?php echo $row['idSector'];?>" method="post">
            
              <div class="form-group">
                    ID<input type="text" class="form-control" value="<?php echo $row['idSector']; ?>" name="id" placeholder="Codigo" readonly/>
                </div>
                  <div class="form-group">
                    Codigo<input type="text" class="form-control" value="<?php echo $row['codigoS']; ?>" name="codigoU" placeholder="Codigo" />
                </div>
                <div class="form-group">
                    Nombre<input type="text" class="form-control" value="<?php echo $row['nombreS']; ?>" name="nombreU" placeholder="nombre" />
                </div>      

        </div>

        <div class="modal-footer">
            <a href="ubicacionLista.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Atras</button></a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Modificar</button>  
            
            <?php endwhile; ?>
            </form>
        </div>
        
<?php    
}

    function editMobiliario($mobiliario){ ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="mobiliarioIndex.php">Mobiliario</a>
            </li>
            <li class="active">
                Modificar
            </li>
        </ol>
        <hr />
        <div class="modal-body">
            <?php while($row = mysql_fetch_array($mobiliario)): ?>

            <form action="data/mobiliario_model.php?q=updateMobiliario&id=<?php echo $row['codigoM'];?>" method="post">
            
                <div class="form-group">
                    Codigo<input type="text" class="form-control" value="<?php echo $row['codigoM']; ?>" name="codigoM" placeholder="Codigo" readonly/>
                </div>


              <div class="form-group">
                   Nº Equipo<input type="text" class="form-control" value="<?php echo $row['numero']; ?>" name="numero" placeholder="numeroM" readonly/>
                </div>

                  <div class="form-group">
                    Marca<input type="text" class="form-control" value="<?php echo $row['marca']; ?>" name="marca" placeholder="Marca" />
                </div>

                <div class="form-group">
                    Modelo<input type="text" class="form-control" value="<?php echo $row['modelo']; ?>" name="modelo" placeholder="modelo" />
                </div>   

                <div class="form-group">
                    Valor<input type="text" class="form-control" value="<?php echo $row['valor']; ?>" name="valor" placeholder="Valor" />
                </div>
                
                <div class="form-group">
                    Fecha Recepcion<input type="text" class="form-control" value="<?php echo $row['fechaR']; ?>" name="fechaR" placeholder="Fecha" />
                </div>    

                       <div class="form-group">
                    Fecha Adquisicion<input type="text" class="form-control" value="<?php echo $row['fechaA']; ?>" name="fechaA" placeholder="Fecha" />
                </div>
                
                <div class="form-group">
                    Descripcion<input type="text" class="form-control" value="<?php echo $row['descripcion']; ?>" name="descripcion" placeholder="Descripcion" />
                </div>  
                 <div class="form-group">
                    Estado<input type="text" class="form-control" value="<?php echo $row['estado']; ?>" name="estado" placeholder="Estado" />
                </div>
                
                <div class="form-group">
                    Categoria<input type="text" class="form-control" value="<?php echo $row['codigoC']; ?>" name="codigoC" placeholder="Categoria" readonly/>
                </div>  
               
                <div class="form-group">
                    Ubicacion<input type="text" class="form-control" value="<?php echo $row['idSector']; ?>" name="idSector" placeholder="Ubicacion" readonly/>
                </div>
                
                <div class="form-group">
                    Institucion<input type="text" class="form-control" value="<?php echo $row['codigo']; ?>" name="codigo" placeholder="Institucion" readonly/>
                </div>     

        </div>

        <div class="modal-footer">
            <a href="mobiliarioIndex.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Atras</button></a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Modificar</button>  
            
            <?php endwhile; ?>
            </form>
        </div>
        
<?php    
}



    function editEquipo($equipo){ ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="equipoIndex.php">Equipo</a>
            </li>
            <li class="active">
                Modificar
            </li>
        </ol>
        <hr />
        <div class="modal-body">
            <?php while($row = mysql_fetch_array($equipo)): ?>

            <form action="data/equipo_model.php?q=updateEquipo&id=<?php echo $row['codigoE'];?>" method="post">
            
                <div class="form-group">
                    Codigo<input type="text" class="form-control" value="<?php echo $row['codigoE']; ?>" name="codigoE" placeholder="Codigo" readonly/>
                </div>


              <div class="form-group">
                   Nº Equipo<input type="text" class="form-control" value="<?php echo $row['numero']; ?>" name="numeroE" placeholder="numeroE" readonly/>
                </div>

                  <div class="form-group">
                    Marca<input type="text" class="form-control" value="<?php echo $row['marca']; ?>" name="marcaE" placeholder="Marca" />
                </div>

                <div class="form-group">
                    Modelo<input type="text" class="form-control" value="<?php echo $row['modelo']; ?>" name="modeloE" placeholder="modelo" />
                </div>   

                <div class="form-group">
                    Valor<input type="text" class="form-control" value="<?php echo $row['valor']; ?>" name="valorE" placeholder="Valor" />
                </div>
                
                <div class="form-group">
                    Fecha Recepcion<input type="text" class="form-control" value="<?php echo $row['fechaR']; ?>" name="fechaRE" placeholder="Fecha" />
                </div>    

                       <div class="form-group">
                    Fecha Adquisicion<input type="text" class="form-control" value="<?php echo $row['fechaA']; ?>" name="fechaAE" placeholder="Fecha" />
                </div>
                
                <div class="form-group">
                    Descripcion<input type="text" class="form-control" value="<?php echo $row['descripcion']; ?>" name="descripcionE" placeholder="Descripcion" />
                </div>  
                 <div class="form-group">
                    Estado<input type="text" class="form-control" value="<?php echo $row['estado']; ?>" name="estadoE" placeholder="EstadoE" />
                </div>
                
                <div class="form-group">
                    Categoria<input type="text" class="form-control" value="<?php echo $row['codigoC']; ?>" name="codigoCE" placeholder="Categoria" readonly/>
                </div>  
               
                <div class="form-group">
                    Ubicacion<input type="text" class="form-control" value="<?php echo $row['idSector']; ?>" name="idSectorE" placeholder="Ubicacion" readonly/>
                </div>
                
                <div class="form-group">
                    Institucion<input type="text" class="form-control" value="<?php echo $row['codigo']; ?>" name="codigo" placeholder="Institucion" readonly/>
                </div>     

        </div>

        <div class="modal-footer">
            <a href="equipoIndex.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Atras</button></a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Modificar</button>  
            
            <?php endwhile; ?>
            </form>
        </div>
        
<?php    
}





   function editCategoria($categoria){ ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="categoriaLista.php">Categoria</a>
            </li>
            <li class="active">
                Modificar
            </li>
        </ol>
        <hr />
        <div class="modal-body">
            <?php while($row = mysql_fetch_array($categoria)): ?>

            <form action="data/categoria_model.php?q=updateCategoria&id=<?php echo $row['codigoC'];?>" method="post">
            
              <div class="form-group">
                    Codigo<input type="text" class="form-control" value="<?php echo $row['codigoC']; ?>" name="idC" placeholder="codigoC" readonly/>
                </div>
                  <div class="form-group">
                    Nombre<input type="text" class="form-control" value="<?php echo $row['nombreC']; ?>" name="codigoC" placeholder="nombre" readonly/>
                </div>
                <div class="form-group">
                    Tipo<input type="text" class="form-control" value="<?php echo $row['tipo']; ?>" name="tipo" placeholder="tipo" readonly/>
                </div>      

        </div>

        <div class="modal-footer">
            <a href="categoriaLista.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Atras</button></a>
        
            
            <?php endwhile; ?>
            </form>
        </div>
        
<?php    
}




  function editUsuarios($usuarios){ ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="usuario.php">Usuarios</a>
            </li>
            <li class="active">
                Modificar
            </li>
        </ol>
        <hr />

        <div class="modal-body">
            <?php while($row = mysql_fetch_array($usuarios)): ?>

            <form action="data/usuarioL_model.php?q=updateUsuario&id=<?php echo $row['id_usuario'];?>" method="post" >
             <div class="form-group">
                  Id Usuario<input type="text" class="form-control" value="<?php echo $row['id_usuario']; ?>" name="id_usuario" />
                </div>
           
                <div class="form-group">
                  Nombres<input type="text" class="form-control" value="<?php echo $row['nombres']; ?>" name="nombre" placeholder="nombre" />
                </div>

                   <div class="form-group">
                   Apellidos<input type="text" class="form-control" value="<?php echo $row['apellidos']; ?>" name="apellido" placeholder="Apellidos" />
                </div>
                <div class="form-group">
                    Numero DUI<input type="text" class="form-control" value="<?php echo $row['dui']; ?>" name="dui" placeholder="DUI" />
                </div>

                   <div class="form-group">
                    Direccion<input type="text" class="form-control" value="<?php echo $row['direccion']; ?>" name="direccion" placeholder="direccion" />
                </div>
                <div class="form-group">
                    Fecha de Nacimiento<input type="text" class="form-control" value="<?php echo $row['fecha_nacimiento']; ?>" name="fecha" placeholder="Fecha Nacimiento" />
                </div>

                   <div class="form-group">
                Telefono<input type="text" class="form-control" value="<?php echo $row['telefono']; ?>" name="telefono" placeholder="Telefono" />
                </div>
                <div class="form-group">
                Sexo<input type="text" class="form-control" value="<?php echo $row['sexo']; ?>" name="sexo" placeholder="Sexo" />
                </div>

                   <div class="form-group">
                    Correo Electronico<input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email" placeholder="Email" />
                </div>
                <div class="form-group">
                 Usuario<input type="text" class="form-control" value="<?php echo $row['usuario']; ?>" name="usuario" placeholder="Usuario" />
                </div>

                   <div class="form-group">
                    Institucion<input type="text" class="form-control" value="<?php echo $row['codigo']; ?>" name="cod" placeholder="Codigo"/>
                </div>
      
             

        </div>

        <div class="modal-footer">
            <a href="usuario.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Atras</button></a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Modificar</button>  
            
            <?php endwhile; ?>
            </form>
        </div>
        
<?php    
}
    

    

}

?>