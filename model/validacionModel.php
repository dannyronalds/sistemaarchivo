<?php 
require_once "conexion.php";
class Validacion{
    public $conn;
    function __construct()
    {
        $this->conn = new Conexion();
    }
    function Login($user,$pass){
        $sql = "SELECT * FROM login WHERE username = '$user' AND passwd = '$pass';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    //funciones para insertar datos del registro de atencion 
    function formEstadistica($txtnumsolicitud,$idusuario,$tipodoc,$estado,$fechaatendida,$changeNotario,$cambNot){
        $sql = "INSERT INTO formEstadistica (numero_solicitud, id_usuario, tipo_documento, estado_documento, fecha_atencion, cambio_notario, notario_cambiado) VALUES ('$txtnumsolicitud', '$idusuario', '$tipodoc', '$estado', '$fechaatendida', '$changeNotario', '$cambNot')";
        $result = $this->conn->ConsultaSin($sql);
        return $result;
    }
    function verFormEstadistica($txtnumsolicitud,$idusuario){
        $sql = "SELECT * FROM formEstadistica WHERE numero_solicitud = '$txtnumsolicitud' AND id_usuario = '$idusuario'";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}

?>