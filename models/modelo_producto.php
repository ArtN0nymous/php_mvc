<?php
class modelo_producto extends Connect{
    private $db;
    private $products;
    public function __construct()
    {
        $this -> db = Connect::connection();
        //verificamos nuetsra conexion e indicamos nuestro arreglo
        $this -> products = array();
    }
    public function get_product(){
        $query = $this->db->query("SELECT * FROM productos");
        //realizamos la consulta principal para llenar nuestra tabla de productos
        while($row=$query->fetch_assoc()){
            $this->products[] = $row;
        }
        return $this->products;
    }
}

?>