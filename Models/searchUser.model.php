<?php
require_once 'Conexion.php';

class Search
{    
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }
        
    function DatosEscritura($idSol)
    {
        $sql = "SELECT codSol, codUsu, codTipSol, idSol, fecCreacion FROM solicitudes WHERE codSol =" .$idSol;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
    function DatosEscritura1($idSol)
    {
        $sql = "SELECT codSol, codUsu, codTipSol, idSol, fecCreacion FROM solicitudes WHERE codSol =" .$idSol;
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    function DatosUsuario($codUsuario)
    {
        $sql = "SELECT codUsu, CONCAT(nombre,' ',apePat,' ',apeMat) as persona, numDoc, telefono FROM usuarios WHERE codUsu = ".$codUsuario;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    function DatosTipoEscritura($idSol)
    {
        $sql = "SELECT idSol, tipEsc,codNot FROM escpublicas WHERE idSol = ". $idSol;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    function DatosPartidas($idSol)
    {
        $sql = "SELECT tipPar, nombre1, nombre2, muni FROM partidas WHERE idSol = ".$idSol;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    function DatosExpediente($idSol)
    {
        $sql = "SELECT tipExpJud, materia, demandante, demandado FROM expedientes WHERE idSol =". $idSol;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    
    function DatosNotario($codNotario)
    {
        $sql = "SELECT cod_not, CONCAT(nom_not,' ',pat_not,' ',mat_not) as notario, provincia FROM notarios WHERE cod_not = ". $codNotario;
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
 }
