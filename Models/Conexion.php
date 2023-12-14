<?php
date_default_timezone_set('America/Los_Angeles');

class Conexion
{
	private $conn;

	function __construct()
	{
		$host = "localhost";
		$user = "danny";
		$pass = "191830";
		$db   = "recepcion";

		$this->conn = new mysqli($host, $user, $pass, $db);
		
		if ($this->conn->connect_errno) {
			echo "Error al contenctar a MySQL: (" . $this->conn->connect_errno . ") " . //$mysqli->connect_error;
			exit();
		}
	

		#echo $this->conn->host_info. " Test en Conection.php";
		return $this->conn;
	}

	public function close() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
	public function query($sql) {
        if ($this->conn) {
            return $this->conn->query($sql);
        } else {
            return false;
        }
    }

	function ConsultaCon($sql)
	{ #SELECT
		if(!$result = $this->conn->query($sql))
		{
			echo "Error: ".mysqli_error($this->conn);
			return false;
				exit();
		}

		return $result;
		mysqli_close($this->conn);
	}

	function ConsultaSin($sql)
	{ #INSERT, UPDATE, DELETE
		if(!$this->conn->query($sql))
		{
			echo "Error: ".mysqli_error($this->conn);
			exit();
		}

		return true;
		mysqli_close($this->conn);
	}

	function ConsultaArray($sql)
	{  #SELECT 
		if(!$result = $this->conn->query($sql))
		{
			echo "Error: ".mysqli_error($this->conn);
			return false;
			exit();
		}
		$res = $result->fetch_array(MYSQLI_ASSOC);
		return $res;
		mysqli_close($this->conn);
	}

}
