<?php 
    include("../config/db.php");
    $conexion = Connect::connection();
    //asignamos los valores de conexion
    $code = $_GET['code'];
    //tomanos los valores del codigo para verificar si este existe o es diferente de vacio
    if ($code !=""){
        //realizamos la consulta a la tabla tomando en cuenta el codigo si se obtuvo anteriormente
        $query = "DELETE FROM productos where cod_prod = $code";
        //ejecutamos la consulta
        $result = mysqli_query($conexion,$query);
        //enviamos el mensaje al index a traves de las varibales de session
        $_SESSION['messageinf']="Registro eliminado";
        header("Location: ../index.php");
    } else{
        echo "Error en la conuslta: " + $query;
    }
?>