<?php
include("../config/db.php");
//asignamos los valores enviados por el metodo post a nuestras variables
$name=$_POST['name'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$descript=$_POST['descript'];
$unidad=$_POST['unidad'];
//checamos nuestra conexion
$conexion = Connect::connection();
//validamos que ningun dato se encuentre vacio
if($name !="" and $precio !="" and $cantidad !="" and $descript !="" and $unidad !=""){
    //realizamos la consulta de insercion en la tabla de productos añadiendo los valores de las variables
    $query ="insert into productos(nombre,precio,cantidad,unidad,descrip) values('$name','$precio','$cantidad','$unidad','$descript')";
    //realizamos una ocnsulta se insercion a la tabla de resitro de igual forma
    //$query1 ="insert into registro1(nombre,precio,cantidad,unidad,descrip) values('$name','$precio','$cantidad','$unidad','$descript')";
    //ejecutamos las consultas
    //mysqli_query($conexion,$query1);
    /* echo "Guardado correctamente" */
    $result = mysqli_query($conexion,$query);
    //verificamos el resultado de la consulta a la tabla productos
    if(!$result){
        echo $query;
    die("Error query fail");
    }
    // si todo ha salido bien enviamos un mensaje a traves de las variables de session al index
    $_SESSION['message']="Guardado exitosamente";
    header("Location: ../index.php");
}
//si no enviamos un mensaje a traves de las variables de session al index
$_SESSION['messageinf']="Algunos Campos no son correctos";
header("Location: ../index.php");

?>