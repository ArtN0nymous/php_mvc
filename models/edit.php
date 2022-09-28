<?php
include("../config/db.php");

    $conexion = Connect::connection();
    //revisamos nuestra conexion
    //verificamos que el valor de code existe
    if (isset($_GET['code'])){
        //si existe tomamos ese valor para una variable
        $code = $_GET['code'];
        //realizamos una cosulta completa a la tabla con la condicion de nuestro codigo
        $query = "SELECT * FROM productos where cod_prod = $code";
        //ejecutamos la consulta
        $result = mysqli_query($conexion,$query);

        //si el resultado de la consulta contiene una fila
        if(mysqli_num_rows($result)==1){
            //asignamos el valor de fila en un array a la variable row
            $row = mysqli_fetch_array($result);
            //llenamos las varibles con los datos guardados en el arreglo
            $cod_prod = $row['cod_prod'];
            $name = $row['nombre'];
            $precio = $row['precio'];
            $cantidad = $row['cantidad'];
            $unidades = $row['unidad'];
            $status = $row['status'];
            $descript = $row['descrip'];
        }

        //verificamos si el valor modificar existe en el metodo post
    } else if(isset($_POST['modificar'])){
        //si existe llenamos nuestra varibles con los datos que se han enviado atraves de este metodo
        $cod_prod = $_POST['code'];
        $name = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $unidades = $_POST['unidades'];
        $status = $_POST['status'];
        $descript = $_POST['descript'];
        //realizamos la consulta de actualizar asignando los valores nuevos enviados por el post en las columnas correspondientes
        $query = "UPDATE productos  SET nombre = '$name',precio = $precio,cantidad = $cantidad, unidad ='$unidades', status = '$status',descrip = '$descript' WHERE cod_prod = $cod_prod";
        //ejecutamos la cosulta
        mysqli_query($conexion,$query);
        //verificamos el resultado
        $result = mysqli_query($conexion,$query);
        if(!$result){
            echo $query;
            die(" Error query fail");
        }
        //enviamos un mensaje a traves de las variables de session al index
        $_SESSION['messageedit']="Registro Modificado";
        header("Location: ../index.php");
    }

include("../views/editview.php")

?>