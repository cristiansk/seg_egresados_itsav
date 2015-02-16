<?php 
require_once "../database/db_handler.php";
class Ficha extends Database {
	private $appPaterno, $apppMaterno, $nombre;
	private $calleNum, $colonia;
	private $ciudad, $estado, $codPost;
	private $telCasa, $telCel, $telRec;
	private $email, $facebook;

	public function __construct(){
		echo "feo";
	}

	public function insertaRegistro(){
		try {
			$this->sentencia = "insert into infoPersonal values('1','1','1','1','1','1','1','1','1','1', '1','1','1','1')";
			$this->ejecutarQuery();
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}

$fi = new Ficha();
$fi->insertaRegistro();
?>