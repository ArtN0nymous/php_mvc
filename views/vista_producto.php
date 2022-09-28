<?php include("views/header.php")?>
    <nav class="navbar navbar-dark bg-dark">
      <!-- indicamos el estilo de la barra de navegacion y definimos sus contenedores-->
        <div class="container">
            <a href="index.php" class="navbar-brand">
            PRODUCTOS
            </a>
            <a href="views/registro.php" class="navbar-brand">
            REGISTROS
            </a>
        </div>
            <a class="navbar-brand">
              BUSCAR:
            </a>
            <!-- cargamos nuestro script de busqueda -->
            <input type="text" id="buscar" onkeyup="doSearch()">
    </nav>
    <!-- definimos las proopiedades de nuetsra tabla -->
    <table id="tabla_p" data-position="center" class="table table-bordered">
        <thead style="text-align:center; border:3px solid rgb(95, 95, 95);" >
            <tr>
              <!-- columnas -->
                <th>Cod_prod</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Unidades</th>
                <th>Status</th>
                <th>Descripción</th>
                <th>Opt.</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $prod):?>
            <tr>
              <!-- contenido de las filas -->
                <td><?php echo $prod['cod_prod']; ?></td>
                <td><?php echo $prod['nombre']; ?></td>
                <td><?php echo $prod['precio']; ?></td>
                <td><?php echo $prod['cantidad']; ?></td>
                <td><?php echo $prod['unidad']; ?></td>
                <td><?php echo $prod['status']; ?></td>
                <td><?php echo $prod['descrip']; ?></td>
                <td>
                  <!-- definimos los estilos de los botones eliminar y modificar cargando clases fontawesome, indicamos las direcciones de destino respectivamente mas el codigo de llave priamria del registro seleccionado-->
                  <a id="edit" href="models/edit.php?code=<?php echo $prod['cod_prod']?>" class="btn btn-secondary" >
                    <i class="far fa-edit"></i>
                  </a>
                  <a id="delete" href="models/delete.php?code=<?php echo $prod['cod_prod']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <!-- definimos las acciones y metodos de envio para el contenedor form de los controles principales -->
    <form action="models/guardar.php" method="POST" id="controles">
    <?php
      /* verificamos los datos de nuetsras variables de sesion y mostramos un mensaje en caso de que lo haya */
      if(isset($_SESSION['message'])){?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- una vez que se muestre el mensaje se elimina el contenido de las varibles de sesion para que no se muestre nuevamente el mismo -->
    <?php session_unset(); } ?>
    <?php 
      $mensaje="";
      if(isset($_SESSION['messageinf'])){?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= $_SESSION['messageinf'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset(); } ?>
    <?php 
      $mensaje="";
      if(isset($_SESSION['messageedit'])){?>
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <?= $_SESSION['messageedit'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset(); } ?>
    <!-- definimos los objetos de nuetsros controles principales y sus propiedades,placeholder, id, type y name para al referencia del envio de datos -->
    <h2>Nombre:</h2>
    <input type="text" id="name" name="name" placeholder="Nombre del producto" class="form-control" autofocus>
    <h2>Precio:</h2>
    <input type="number" id="precio" name="precio" placeholder="0.00" class="form-control">
    <h2>Cantidad:</h2>
    <input type="number" id="cantidad" name="cantidad" placeholder="0" class="form-control"><br>
    <h2>Unidades:</h2>
    <select id="select" name="unidad">
      <option>Kg</option>
      <option>Lbs</option>
      <option>gr</option>
      <option>Hz</option>
      <option>Pza</option>
    </select><br>
    <h2>Descripción:</h2>
    <!-- definimos las propiedades de nuestro textarea descripcion y utilzamos estilos de bootstrap -->
    <textarea id="description" name="descript" rows="3" class="form-control" placeholder="Descripción"></textarea><br>
    <!-- definimos las propiedades el boton registrar -->
    <input type="submit" id="nuevo" value="Registrar" class="btn btn-success btn-block"/>
    </form>
<?php include("footer.php");?>
