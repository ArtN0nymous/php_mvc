<?php
//iNDICAMOS LAS DEPENDENCIAS ENTRE LOS ARCHIVOS
//Siempre debemos de invocar primero antes al modelo y despues a la vista
//MODELO
require_once('models/modelo_producto.php');
$prod = new modelo_producto();
$data = $prod->get_product();
//VISTA
require_once('views/vista_producto.php');

?>