<?php
/* Definimos los parametros para la conexion */
class Connect{
    public static function connection(){
        session_start();
        $conexion = new mysqli("DB_2","root","12345","DB");
        return $conexion;
    }
}

?>