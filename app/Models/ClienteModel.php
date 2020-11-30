<?php
class ClienteModel{
    private $db;
    private $clientes;
 
    public function __construct(){
        $this->db = Db::conectar();
        $this->clientes = array();
    }
    public function listar(){
        $this->clientes = $this->obtenerClientes();
        return $this->clientes;
    }

    public function obtenerClientes(){
        $consulta = $this->db->query("select * from clientes;");
        while($filas = $consulta->fetch_assoc()){
            $clientes[] = $filas;
        }
        return $clientes;
    }
}

?>