<?php 
class modelo_registro extends Connect{
    private $db;
    private $registros;
    public function __construct()
    {
        $this -> db = Connect::connection();
        //verificamos la ocnexion e indicamos nuestro arreglo
        $this -> registros = array();
    }
    public function get_registro(){
        $query = $this->db->query("SELECT * FROM registro1");
        //realizamos la consulta principal de nuestra tabla de registro
        while($row=$query->fetch_assoc()){
            $this->registros[] = $row;
        }
        return $this->registros;
    }
}
?>