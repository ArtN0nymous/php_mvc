<?php 
    include("../config/db.php");
    $conexion = Connect::connection();
    //llamamos a nuestra conexion
    $query = "TRUNCATE TABLE registro1";
    //indicamos la ocnsulta para vacias la tabla
    $result = mysqli_query($conexion,$query);
    //ejecutamos la consulta y volvemos a la vista de registro
    header("Location: ../views/registro.php");
?>