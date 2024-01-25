<?php
require_once "conexion.php";

class Notarios
{
    private $conn;
    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    function MostrarNotarios()
    {
        $sql = "SELECT cod_not, concat(nom_not,' ',pat_not,' ',mat_not) as notario FROM notarios;";
        $result = $this->conn->ConsultaCon($sql);
        return $result;
    }
}

