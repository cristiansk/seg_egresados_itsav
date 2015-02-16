<?php 
abstract class Database {
	protected $db_name = "seg_egresados_itsav";
	private static $db_pass = "a28d8896f9";
	private static $db_host = "localhost";
	private static $db_user = "root";
	protected $resultado = array();
	protected $sentencia;
	private $conn;	

	abstract protected function insertaRegistro();
	#abstract protected function ejecutarConsulta();
	#abstract protected function actualizarRegistro();
	#abstract protected function eliminarRegistro();

	private function open(){
		try {
			$this->conn = new PDO("mysql:host=" . self::$db_host . ";dbname=" . $this->db_name, self::$db_user, self::$db_pass);
			$this->conn->exec("SET CHARACTER SET UTF8");
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	protected function ejecutarQuery(){
		try {
			$this->open();
			#$sentencia = $this->conn->prepare($this->sentencia);
			#$sentencia->execute();
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conn->beginTransaction();
  			$this->conn->exec($this->sentencia);
  			$this->conn->commit();
			$this->close();
		} catch (Exception $e) {
			$this->conn->rollBack();
			echo "Error: " . $e->getMessage();
		}
	}

	protected function obtenerRegistrosDeConsulta(){
		try {
			
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	private function close(){
		try {
			$this->conn = null;
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	public function __clone(){ 
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR); 
    }
}
?>