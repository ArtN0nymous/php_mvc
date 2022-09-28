<?php
//INDICAMOS LAS DEPENDENCIAS ENTRE LOS ARCHIVOS
//Siempre debemos de invocar primero antes al modelo y despues a la vista
//MODELO
require_once("../models/modelo_registro.php");
$reg = new modelo_registro();
$data = $reg->get_registro();
//VISTA
require_once('../views/registro.php');
?>