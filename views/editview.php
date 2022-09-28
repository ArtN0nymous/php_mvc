<?php include("header.php"); ?>

<div class="container p-4">
    <!-- creamos un contenedor indicando sus columnas y filas -->
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <!-- agregamos la clase card para la vista -->
                <form action="../models/edit.php" method="POST">
                <!-- indicamos la direccion de destino y el metodo de envio para los datos -->
                <!-- definimos grupos donde se contienen los controles para el editado de los datos -->
                <div form-group>
                        <label for="cod_prod">Cod_prod: </label>
                        <input type="text" name="code" value="<?php echo $cod_prod?>" readonly>
                        <!-- indicamos el valor que debe cargar el elemento y lo definimos como solo lectura ya que no se debe modificar la llave primaria del codigo del producto -->
                    </div>
                    <div form-group>
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" value="<?php echo $name ?>"
                        class="form-control" placeholder="Actualizar nombre">
                    </div>
                    <div form-group>
                        <label for="precio">Precio: </label>
                        <input type="number" name="precio" value="<?php echo $precio ?>"
                        class="form-control" placeholder="Actualizar precio">
                    </div>
                    <div form-group>
                        <label for="cantidad">Cantidad: </label>
                        <input type="number" name="cantidad" value="<?php echo $cantidad ?>"
                        class="form-control" placeholder="Actualizar cantidad">
                    </div>
                    <div form-group>
                        <label for="unidad">Unidades: </label>
                        <select name="unidades">
                            <option selected="true"><?php echo $unidades?></option>
                            <option>Kg</option>
                            <option>Lbs</option>
                            <option>gr</option>
                            <option>Hz</option>
                            <option>Pza</option>
                        </select>
                    </div>
                    <div form-group>
                        <label for="status">Status: </label>
                        <select name="status">
                            <option selected="true"><?php  echo $status ?></option>
                            <option>V</option>
                            <option>C</option>
                        </select>
                    </div>
                    <div form-group>
                    <label for="descript">Descripción: </label>
                    <textarea name="descript" class="form-control" placeholder="Actualizar descripción"><?php echo $descript?></textarea><br>
                    <!-- añadimos un input como boton para cargar nuetsros datos añadiendo el estilo de la clase btn-warning -->
                    <input type="submit" style="width: 100%;" value="Modificar" class="btn btn-warning btn-block" name="modificar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 

<?php include("footer.php"); ?>