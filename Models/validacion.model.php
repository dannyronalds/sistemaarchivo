<?php
require "Conexion.php";

class Validacion  # Herencia
{
	private $conn;
	function __construct()
	{
		$this->conn = new Conexion();
	}

	function Validar($user,$pass)
	{
	
		$sql ="SELECT idpersonal, nivel, estado FROM login WHERE username = '$user' AND passwd = '$pass';";
		$result = $this->conn->ConsultaArray($sql);
		return $result;
	}

	function Create()
	{
			
	}
}

$validacion = new Validacion();
$data = $validacion->Validar('edgar','1504');

#echo "Estado del usuario: " . $data['estado'];
if($data['estado'] == 1){
	echo "Usuario ACTIVO <br>";
}else{
	echo "Usuario INACTIVO <br>";
}
echo "CODIGO DEL PERSONAL: " . $data['idpersonal']."<br>";
echo "Nivel: " . $data['nivel'];
