<?php include("header.php");?>
<?php include("../config/db.php"); ?>
<?php include("../controllers/controlador_registro.php");?>
<script src="../models/script/scripts.js"></script>
<nav class="navbar navbar-dark bg-dark">
    <!-- deinfimos el estilo de la barra de navegacion y los cntenedores principales -->
        <div class="container" style="padding-right: 30%;">
            <a href="../index.php" class="navbar-brand">
            PRODUCTOS
            </a>
            <a href="registro.php" class="navbar-brand">
            REGISTROS
            </a>
            <a class="navbar-brand">
              BUSCAR:
            </a>
            <!-- asiganmos las acciones del evento onkeyup par llamar a nuestra funcion js de busqueda -->
            <input type="text" id="buscar" onkeyup="doSearch()">
            <!-- definimos las propiedades del boton borrar, con el estilo de la clase btn-danger y su icono fa-trash-alt -->
            <a id="delete" href="../views/popup.html" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
            </a>
        </div>
    </nav>
    <!-- Creamos la tabla indicando sus propiedades y estilos de bootstrap -->
    <table id="tabla_p" data-position="center" class="table table-bordered">
        <thead style="text-align:center; border:3px solid rgb(95, 95, 95);" >
            <tr>
                <!-- definimos sus columnas -->
                <th>Cod_prod</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Unidades</th>
                <th>Status</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $reg):?>
            <tr>
                <!-- recorremos nuestro arreglo y asignamos los valores en orden a nuetsras columnas -->
                <td><?php echo $reg['cod_prod']; ?></td>
                <td><?php echo $reg['nombre']; ?></td>
                <td><?php echo $reg['precio']; ?></td>
                <td><?php echo $reg['cantidad']; ?></td>
                <td><?php echo $reg['unidad']; ?></td>
                <td><?php echo $reg['status']; ?></td>
                <td><?php echo $reg['descrip']; ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php include("footer.php");?>