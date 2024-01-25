<?php

require_once "conexion.php";

class Graficos_model
{
  private $conn;

  function __construct()
  {
    $this->conn = new Conexion();  # instancia
  }
  function Pie()
  {
    $sql = "SELECT (
            SELECT COUNT(*) AS total_atendido
            FROM formEstadistica
            WHERE estado_documento = 'Atendido') as atendido,
            (SELECT COUNT(*) AS total_atendido
            FROM formEstadistica
            WHERE estado_documento = 'No Atendido') as no_atendido,
            (SELECT COUNT(*) AS total_atendido
            FROM formEstadistica
            WHERE estado_documento = 'Pendiente') as pendiente";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  function Line()
  {
    $sql = "SELECT DATE(fecha_atencion) AS fecha, COUNT(*) AS total
        FROM formEstadistica
        WHERE fecha_atencion >= DATE_ADD(CURDATE(), INTERVAL -7 DAY)
        GROUP BY DATE(fecha_atencion)
        ORDER BY DATE(fecha_atencion) DESC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function BarrasX()
  {
    $sql = "SELECT DISTINCT(tipExpJud) as tipo, COUNT(tipExpJud) as total 
        FROM expedientes 
        GROUP BY tipExpJud
        HAVING COUNT(tipExpJud) > 5 
        ORDER BY COUNT(tipExpJud) DESC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function BarrasY()
  {
    $sql = "SELECT DISTINCT(tipPar) AS tipo, COUNT(tipPar) AS total FROM partidas GROUP BY tipPar;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
}
