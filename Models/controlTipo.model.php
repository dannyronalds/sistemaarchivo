<?php

require_once "Conexion.php";

class ControlTipo
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();  # instancia
	}

	function ConsultaTipo($valor)
	{
		$sql ="SELECT codSol, codUsu, codTipSol, idSol FROM solicitudes WHERE codSol = ". $valor;
		$datos = $this->conn->ConsultaArray($sql);
		return $datos;
	}

	function VerUsuario($codUsuario)
	{
		$sql ="SELECT u.codUsu, CONCAT(u.nombre, ' ', u.apePat, ' ', u.apeMat) AS usuario, 
    	numDoc, codDis, telefono
    	FROM usuarios AS u WHERE u.codUsu = " .$codUsuario;
		$data = $this->conn->ConsultaArray($sql);
		return $data;
	}

	function VerDatosEscritura($idSol)
	{
		$sql = "SELECT p.idSol, p.tipEsc, p.codNot,
    	p.otorgante, p.favorecido,
    	CONCAT(p.dia, '-', p.mes, '-', p.anio) AS fecha, 
    	p.obs 
    	FROM escpublicas AS p
    	WHERE p.idsol = ".$idSol;

		$data = $this->conn->ConsultaArray($sql);
		return $data;
	}

	function verNotario($idsol)
	{
		$sql = "SELECT n.cod_not, CONCAT(n.nom_not, ' ', n.pat_not, ' ', n.mat_not) as nomNot, e.idSol
        FROM notarios as n
        INNER JOIN escpublicas as e ON e.codNot = n.cod_not
        WHERE e.idSol = $idsol;";

		$data = $this->conn->ConsultaArray($sql);
		return $data;
	}



	function VerDatosPartida($idSol)
	{
		$sql = "SELECT r.idSol, r.tipPar, r.nombre1, r.nombre2,
    	CONCAT(r.dia, '-', r.mes, '-', r.anio) AS fecha, 
    	r.muni, r.obs
    	FROM partidas AS r
		WHERE r.idsol = ".$idSol;

		$data = $this->conn->ConsultaArray($sql);
		return $data;
	}

	function VerDatosExpediente($idSol)
	{
		$sql = "SELECT e.idSol, e.tipExpJud, e.materia, e.demandante, 
	    e.demandado, e.causante, e.juzgado, e.nomSec, e.Lugar, 
	    CONCAT(e.dia, '-', e.mes, '-', e.anio) AS fecha, 
	    e.obs
	    FROM expedientes AS e
		WHERE e.idsol = ".$idSol;

		$data = $this->conn->ConsultaArray($sql);
		return $data;
	}



	function VerPartida()
	{
		$sql = "SELECT r.idSol, r.tipPar, r.nombre1, r.nombre2,
    	CONCAT(r.dia, '-', r.mes, '-', r.anio) AS fecha, 
    	r.muni, r.obs
    	FROM partidas AS r";

		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}

	


} 
