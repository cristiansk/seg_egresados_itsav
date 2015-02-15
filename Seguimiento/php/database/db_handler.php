<?php 
abstract class Database {
	private $conexion;
	protected $url = "";
	private $db_user, $db_pass, $db_name;
	protected $query;

	public function __contruct(){

	}

	protected function abrirConexion(){
		try {
			$this->conexion = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name, $this->db_user, $this->db_pass);
		} catch (Exception $e) {
			echo "<script>alert('Error'" . $e->getMessage() . ")</script>";
		}
	}

	abstract function insertarRegistro();
	abstract function consultarRegistro();
	abstract function modificarRegistro();
	abstract function eliminarRegistro();
}
?>